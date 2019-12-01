using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;


namespace TechPet
{
    public partial class frmProdutos : MetroFramework.Forms.MetroForm
    {
        public frmProdutos()
        {
            InitializeComponent();
        }

        ConexaoBD bd = new ConexaoBD();
        string sql;
        string foto;

        public void Listar()
        {
            sql = "select * from produtos";
            dgv_listar.DataSource = bd.ConsultarTabelas(sql);
        }

        private void frmProdutos_Load(object sender, EventArgs e)
        {
            Listar();
        }

        public void Limpar()
        {
            txt_codigo.Clear();
            txt_nome.Clear();
            txt_descricao.Clear();
            txt_quantidade.Clear();
            txt_valor.Clear();
            ptx_foto.Load("H:/www/Tech Pet/site php/C#/TechPet/TechPet/Resources/semfoto.jpeg");
            txt_codigo.Focus();
            foto = null;
        }

        private void btn_voltar_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btn_salvar_Click(object sender, EventArgs e)
        {
            double valor;
            int quantidade;
            string new_foto = Path.GetFileName(foto);

            string sourcePath = foto;
            string targetPath = @"H:/www/Tech Pet/site php/Assets/Produtos/";


            if (double.TryParse(txt_valor.Text, out valor) && int.TryParse(txt_quantidade.Text, out quantidade) && new_foto != null && sourcePath != null && txt_nome.Text != "")
            {
               string sourceFile = System.IO.Path.Combine(sourcePath);
               string destFile = System.IO.Path.Combine(targetPath, new_foto);

                foto = foto.Replace(@"\", @"\\");

                sql = string.Format("insert into produtos values(null, '{0}', '{1}','{2}','{3}','{4}')", txt_nome.Text,txt_valor.Text.Replace(",", "."),txt_quantidade.Text,txt_descricao.Text,new_foto);

                bd.AlterarTabelas(sql);
                MetroFramework.MetroMessageBox.Show(this, "Produto Cadastrado com Sucesso!", "Cadastro", MessageBoxButtons.OK, MessageBoxIcon.Information);
                if(foto != sourcePath)
                {
                    System.IO.File.Copy(sourceFile, destFile, true);
                }
                Listar();
                Limpar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "Conteúdo do campo inválido ou em branco!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void btn_alterar_Click(object sender, EventArgs e)
        {
            double valor;
            int quantidade;
            string new_foto = Path.GetFileName(foto);

            string sourcePath = foto;
            string targetPath = @"H:/www/Tech Pet/site php/Assets/Produtos/";
            

                if (double.TryParse(txt_valor.Text, out valor) && int.TryParse(txt_quantidade.Text, out quantidade) && new_foto != null && sourcePath != null && txt_codigo.Text != "")
                {
                    string sourceFile = System.IO.Path.Combine(sourcePath);
                    string destFile = System.IO.Path.Combine(targetPath, new_foto);

                    foto = foto.Replace(@"\", @"\\");

                    sql = string.Format("update produtos set nome = '{0}', valor = '{1}', quantidade = '{2}', descricao = '{3}', imagem = '{4}' where codigo = '{5}'", txt_nome.Text, txt_valor.Text.Replace(",", "."), txt_quantidade.Text, txt_descricao.Text, new_foto, txt_codigo.Text);

                    bd.AlterarTabelas(sql);
                    MetroFramework.MetroMessageBox.Show(this, "Produto Alterado com Sucesso!", "Alterar", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    Listar();
                    Limpar();
                }
                else
                {
                    MetroFramework.MetroMessageBox.Show(this, "Produto não pode ser alterado!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
        }

        private void btn_buscar_Click(object sender, EventArgs e)
        {
            sql = string.Format("select * from produtos where codigo = '{0}' or nome = '{1}'", txt_codigo.Text, txt_nome.Text);
            DataTable resultado = new DataTable();
            resultado = bd.ConsultarTabelas(sql);

            if (resultado.Rows.Count == 1)
            {
                
                txt_codigo.Text = resultado.Rows[0]["codigo"].ToString();
                txt_nome.Text = resultado.Rows[0]["nome"].ToString();
                txt_valor.Text =  resultado.Rows[0]["valor"].ToString().Replace(",", ".");
                txt_quantidade.Text = resultado.Rows[0]["quantidade"].ToString();
                txt_descricao.Text = resultado.Rows[0]["descricao"].ToString();
                ptx_foto.Load(@"H:\www\Tech Pet\site php\Assets\Produtos\" + resultado.Rows[0]["imagem"].ToString());
                foto = resultado.Rows[0]["imagem"].ToString();
                dgv_listar.DataSource = bd.ConsultarTabelas(sql);
            }else if(resultado.Rows.Count > 1)
            {
                dgv_listar.DataSource = bd.ConsultarTabelas(sql);
                Limpar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "Produto não cadastrado!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                Limpar();
            }
        }

        private void btn_excluir_Click(object sender, EventArgs e)
        {
            if(txt_codigo.Text != "")
            {
                sql = "delete from produtos where codigo = '" + txt_codigo.Text + "'";
                bd.AlterarTabelas(sql);
                MetroFramework.MetroMessageBox.Show(this, "Produto Excluido com sucesso!", "Excluir", MessageBoxButtons.OK, MessageBoxIcon.Information);
                Limpar();
                Listar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "Produto não pode ser excluido!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void dgv_listar_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

            if (e.RowIndex >= 0)
            {

                txt_codigo.Text = dgv_listar.Rows[e.RowIndex].Cells[0].Value.ToString();
                txt_nome.Text = dgv_listar.Rows[e.RowIndex].Cells[1].Value.ToString();
                txt_valor.Text = dgv_listar.Rows[e.RowIndex].Cells[2].Value.ToString().Replace(",", ".");
                txt_quantidade.Text = dgv_listar.Rows[e.RowIndex].Cells[3].Value.ToString();
                txt_descricao.Text = dgv_listar.Rows[e.RowIndex].Cells[4].Value.ToString();

                ptx_foto.Load(@"H:\www\Tech Pet\site php\Assets\Produtos\" + dgv_listar.Rows[e.RowIndex].Cells[5].Value.ToString());
                foto = dgv_listar.Rows[e.RowIndex].Cells[5].Value.ToString();
            }
        }

        private void btn_foto_Click(object sender, EventArgs e)
        {
            if (ofd_foto.ShowDialog() == System.Windows.Forms.DialogResult.OK)
            {
                ptx_foto.Load(ofd_foto.FileName);
                foto = ofd_foto.FileName;
            }
        }
    }
}
