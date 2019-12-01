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
    public partial class frmVacinas : MetroFramework.Forms.MetroForm
    {
        public frmVacinas()
        {
            InitializeComponent();
        }

        ConexaoBD bd = new ConexaoBD();
        string sql;
        DateTime dataAplicacao;
        DateTime dataVencimento;

        public void Listar()
        {
            sql = "select * from vacinas";
            dgv_listar.DataSource = bd.ConsultarTabelas(sql);
        }

        public void cbxListar()
        {
            sql = "select codigo from pet";
            cbx_codigo.DataSource = bd.ConsultarTabelas(sql);
            cbx_codigo.DisplayMember = "codigo";
            cbx_codigo.ValueMember = "codigo";
        }

        private void frmVacinas_Load(object sender, EventArgs e)
        {
            Listar();
            cbxListar();
        }

        public void Limpar()
        {
            txt_nome.Clear();
            dtp_aplicacao.Text = DateTime.Now.ToString();
            dtp_vencimento.Text = DateTime.Now.ToString();
            txt_codigo.Clear();
            cbx_codigo.Refresh();
            txt_nome.Focus();
        }

        private void btn_voltar_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btn_salvar_Click(object sender, EventArgs e)
        {
            if (txt_nome.Text != "" && cbx_codigo.Text != "")
            { 

                dataAplicacao = DateTime.Parse(dtp_aplicacao.Text);
                dataVencimento = DateTime.Parse(dtp_vencimento.Text);

                sql = string.Format("insert into vacinas values(null, '{0}', '{1}', '{2}', '{3}')",
                                    txt_nome.Text, dataAplicacao.ToString("yyyy-MM-dd"), dataVencimento.ToString("yyyy-MM-dd"), cbx_codigo.SelectedValue.ToString());

                bd.AlterarTabelas(sql);
                MetroFramework.MetroMessageBox.Show(this, "Vacina Cadastrada com Sucesso...", "Cadastro", MessageBoxButtons.OK, MessageBoxIcon.Information);
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
                dataAplicacao = DateTime.Parse(dtp_aplicacao.Text);
                dataVencimento = DateTime.Parse(dtp_vencimento.Text);

                sql = string.Format("update vacinas set nome = '{0}', dta_aplicacao = '{1}', dta_vencimento = '{2}', pet_codigo = '{3}' where codigo = '{4}'", txt_nome.Text, dataAplicacao.ToString("yyyy-MM-dd"), dataVencimento.ToString("yyyy-MM-dd"), cbx_codigo.SelectedValue.ToString(), txt_codigo.Text);

                bd.AlterarTabelas(sql);
                MetroFramework.MetroMessageBox.Show(this, "Vacina Alterada com Sucesso!", "Alterar", MessageBoxButtons.OK, MessageBoxIcon.Information);
                Listar();
                Limpar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "Vacina não pode ser alterada!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void btn_listar_Click(object sender, EventArgs e)
        {
            sql = string.Format("select * from vacinas where pet_codigo = '{0}'", cbx_codigo.SelectedValue.ToString());
            DataTable resultado = new DataTable();
            resultado = bd.ConsultarTabelas(sql);

            if (resultado.Rows.Count == 1)
            {
                txt_codigo.Text = resultado.Rows[0]["codigo"].ToString();
                txt_nome.Text = resultado.Rows[0]["nome"].ToString();
                dtp_aplicacao.Text = resultado.Rows[0]["dta_aplicacao"].ToString();
                dtp_vencimento.Text = resultado.Rows[0]["dta_vencimento"].ToString();
                cbx_codigo.Text = resultado.Rows[0]["pet_codigo"].ToString();
            }
            else if(resultado.Rows.Count > 1)
            {
                dgv_listar.DataSource = bd.ConsultarTabelas(sql);
                Limpar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "Vacina não cadastrada!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void btn_excluir_Click(object sender, EventArgs e)
        {
            if (txt_nome.Text != "")
            {
                sql = "delete from vacinas where codigo = '" + txt_codigo.Text + "'";
                bd.AlterarTabelas(sql);
                MetroFramework.MetroMessageBox.Show(this, "Vacina Excluida com sucesso!", "Excluir", MessageBoxButtons.OK, MessageBoxIcon.Information);
                Limpar();
                Listar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "Vacina não pode ser excluida!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void dgv_listar_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            if (e.RowIndex >= 0)
            {
                txt_codigo.Text = dgv_listar.Rows[e.RowIndex].Cells[0].Value.ToString();
                txt_nome.Text = dgv_listar.Rows[e.RowIndex].Cells[1].Value.ToString();
                dtp_aplicacao.Text = dgv_listar.Rows[e.RowIndex].Cells[2].Value.ToString();
                dtp_vencimento.Text = dgv_listar.Rows[e.RowIndex].Cells[3].Value.ToString();
                cbx_codigo.Text = dgv_listar.Rows[e.RowIndex].Cells[4].Value.ToString();
            }
        }
    }
}
