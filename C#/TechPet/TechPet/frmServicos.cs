using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace TechPet
{
    public partial class frmServicos : MetroFramework.Forms.MetroForm
    {
        public frmServicos()
        {
            InitializeComponent();
        }

        Login login = new Login();
        ConexaoBD bd = new ConexaoBD();
        string sql;
        DateTime data;
        DateTime hora;

        public void Listar()
        {
            txt_CNPJ.Text = login.getCNPJ();
            sql = string.Format("select * from servicos where petshop_CNPJ = '{0}' order by data,hora", txt_CNPJ.Text);
            dgv_listar.DataSource = bd.ConsultarTabelas(sql);

        }

        public void cbxListar()
        {
            sql = "select codigo from pet";
            cbx_codigo.DataSource = bd.ConsultarTabelas(sql);
            cbx_codigo.DisplayMember = "codigo";
            cbx_codigo.ValueMember = "codigo";
        }

        private void frmConsultas_Load(object sender, EventArgs e)
        {
            Listar();
            cbxListar();
        }

        public void Limpar()
        {
            txt_codigo.Clear();
            txt_tipo.Clear();
            dtp_data.Text = DateTime.Now.ToString();
            dtp_hora.Text = DateTime.Now.ToString();
            cbx_codigo.Refresh();
            txt_tipo.Focus();
        }

        private void btn_voltar_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btn_salvar_Click(object sender, EventArgs e)
        {

            if (txt_tipo.Text != "" && cbx_codigo.Text != "")
            {

                data = DateTime.Parse(dtp_data.Text);
                hora = DateTime.Parse(dtp_hora.Text);

                sql = string.Format("insert into servicos values(null, '{0}', '{1}', '{2}', '{3}', '{4}')",
                                    txt_tipo.Text, data.ToString("yyyy-MM-dd"), hora.ToString("H:mm:ss"), cbx_codigo.SelectedValue.ToString(), txt_CNPJ.Text);

                bd.AlterarTabelas(sql);
                MetroFramework.MetroMessageBox.Show(this, "servicos Cadastrada com Sucesso...", "Cadastro", MessageBoxButtons.OK, MessageBoxIcon.Information);
                Listar();
                Limpar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "Conteúdo do campo inválido ou em branco...", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void btn_alterar_Click(object sender, EventArgs e)
        {
            if (txt_codigo.Text != "" && cbx_codigo.Text != "")
            {
                data = DateTime.Parse(dtp_data.Text);
                hora = DateTime.Parse(dtp_hora.Text);

                sql = string.Format("update servicos set tipo = '{0}', data = '{1}', hora = '{2}', pet_codigo = '{3}' where codigo = '{4}'", txt_tipo.Text, data.ToString("yyyy-MM-dd"), hora.ToString("H:mm:ss"), cbx_codigo.SelectedValue.ToString(), txt_codigo.Text);

                bd.AlterarTabelas(sql);
                MetroFramework.MetroMessageBox.Show(this, "servicos Alterada com Sucesso!", "Alterar", MessageBoxButtons.OK, MessageBoxIcon.Information);
                Listar();
                Limpar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "servicos não pode ser alterada!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void btn_listar_Click(object sender, EventArgs e)
        {
            sql = string.Format("select * from servicos where pet_codigo = '{0}'", cbx_codigo.SelectedValue.ToString());
            DataTable resultado = new DataTable();
            resultado = bd.ConsultarTabelas(sql);

            if (resultado.Rows.Count == 1)
            {
                txt_codigo.Text = resultado.Rows[0]["codigo"].ToString();
                txt_tipo.Text = resultado.Rows[0]["tipo"].ToString();
                dtp_data.Text = resultado.Rows[0]["data"].ToString();
                dtp_hora.Text = resultado.Rows[0]["hora"].ToString();
                cbx_codigo.Text = resultado.Rows[0]["pet_codigo"].ToString();
                txt_CNPJ.Text = resultado.Rows[0]["petshop_cnpj"].ToString();
                sql = "select * from servicos order by data,hora";
                dgv_listar.DataSource = bd.ConsultarTabelas(sql);
            }
            else if(resultado.Rows.Count > 1)
            {
                dgv_listar.DataSource = bd.ConsultarTabelas(sql);
                Limpar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "Servico não cadastrado!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void btn_efetuada_Click(object sender, EventArgs e)
        {
            if (txt_codigo.Text != "")
            {
                sql = "delete from servicos where codigo = '" + txt_codigo.Text + "'";
                bd.AlterarTabelas(sql);
                MetroFramework.MetroMessageBox.Show(this, "servico Efetuado com sucesso!", "Efetuar", MessageBoxButtons.OK, MessageBoxIcon.Information);
                Limpar();
                Listar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "servicos não pode ser efetuada!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void dgv_listar_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            if (e.RowIndex >= 0)
            {
                txt_codigo.Text = dgv_listar.Rows[e.RowIndex].Cells[0].Value.ToString();
                txt_tipo.Text = dgv_listar.Rows[e.RowIndex].Cells[1].Value.ToString();
                dtp_data.Text = dgv_listar.Rows[e.RowIndex].Cells[2].Value.ToString();
                dtp_hora.Text = dgv_listar.Rows[e.RowIndex].Cells[3].Value.ToString();
                cbx_codigo.Text = dgv_listar.Rows[e.RowIndex].Cells[4].Value.ToString();
                txt_CNPJ.Text = dgv_listar.Rows[e.RowIndex].Cells[5].Value.ToString();
            }
        }
    }
}
