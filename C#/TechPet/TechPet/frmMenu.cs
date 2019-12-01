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
    public partial class frmMenu : MetroFramework.Forms.MetroForm
    {
        public frmMenu()
        {
            InitializeComponent();
        }

        Login login = new Login();

        private void frmMenu_Load(object sender, EventArgs e)
        {
            this.Text = "Seja bem vindo " + login.getUsuario() + "!";
        }

        private void mtr_produtos_Click(object sender, EventArgs e)
        {
            this.Visible = false;
            frmProdutos produtos = new frmProdutos();
            produtos.ShowDialog();
            this.Visible = true;
        }

        private void mtr_vacinas_Click(object sender, EventArgs e)
        {
            this.Visible = false;
            frmVacinas produtos = new frmVacinas();
            produtos.ShowDialog();
            this.Visible = true;
        }

        private void mtr_consultas_Click(object sender, EventArgs e)
        {
            this.Visible = false;
            frmServicos produtos = new frmServicos();
            produtos.ShowDialog();
            this.Visible = true;
        }

        private void mtr_pets_Click(object sender, EventArgs e)
        {
            this.Visible = false;
            frmPets produtos = new frmPets();
            produtos.ShowDialog();
            this.Visible = true;
        }
    }
}
