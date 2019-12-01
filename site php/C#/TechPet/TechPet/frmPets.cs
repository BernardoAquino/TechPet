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
    public partial class frmPets : MetroFramework.Forms.MetroForm
    {
        public frmPets()
        {
            InitializeComponent();
        }

        ConexaoBD bd = new ConexaoBD();
        string sql;

        public void Listar()
        {
            sql = "select * from pet";
            dgv_listar.DataSource = bd.ConsultarTabelas(sql);
        }

        public void Limpar()
        {
            txt_codigo.Clear();
            txt_animal.Clear();
            txt_raca.Clear();
            txt_nome.Clear();
            txt_sexo.Clear();
            txt_email.Clear();
            ptx_foto.Load("H:/www/Tech Pet/site php/C#/TechPet/TechPet/Resources/semfoto.jpeg");
            txt_codigo.Focus();
        }

        private void btn_voltar_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btn_listar_Click(object sender, EventArgs e)
        {
            sql = string.Format("select * from pet where codigo = '{0}' or usuario_email = '{1}'", txt_codigo.Text, txt_email.Text);
            DataTable resultado = new DataTable();
            resultado = bd.ConsultarTabelas(sql);

            if (resultado.Rows.Count == 1)
            {
                txt_codigo.Text = resultado.Rows[0]["codigo"].ToString();
                txt_animal.Text = resultado.Rows[0]["animal"].ToString();
                txt_raca.Text = resultado.Rows[0]["raca"].ToString();
                txt_sexo.Text = resultado.Rows[0]["sexo"].ToString();
                ptx_foto.Load(@"H:/www/Tech Pet/site php/Assets/Pets/" + resultado.Rows[0]["foto"].ToString());
                txt_email.Text = resultado.Rows[0]["usuario_email"].ToString();
            }
            else if(resultado.Rows.Count > 1)
            {
                dgv_listar.DataSource = bd.ConsultarTabelas(sql);
                Limpar();
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "Pet não cadastrado!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void frmPets_Load(object sender, EventArgs e)
        {
            Listar();
        }

        private void dgv_listar_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            if (e.RowIndex >= 0)
            {
                txt_codigo.Text = dgv_listar.Rows[e.RowIndex].Cells[0].Value.ToString();
                txt_animal.Text = dgv_listar.Rows[e.RowIndex].Cells[1].Value.ToString();
                txt_raca.Text = dgv_listar.Rows[e.RowIndex].Cells[2].Value.ToString();
                txt_nome.Text = dgv_listar.Rows[e.RowIndex].Cells[3].Value.ToString();
                txt_sexo.Text = dgv_listar.Rows[e.RowIndex].Cells[4].Value.ToString();
                ptx_foto.Load(@"H:/www/Tech Pet/site php/Assets/Pets/" + dgv_listar.Rows[e.RowIndex].Cells[5].Value.ToString());
                txt_email.Text = dgv_listar.Rows[e.RowIndex].Cells[6].Value.ToString();
            }
        }
    }
}
