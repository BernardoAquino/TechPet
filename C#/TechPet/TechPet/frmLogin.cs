using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MetroFramework;
using MetroFramework.Forms;

namespace TechPet
{
    public partial class frmLogin : MetroFramework.Forms.MetroForm
    {
        public frmLogin()
        {
            InitializeComponent();
        }

        Login objlogin = new Login();

        private void btn_login_Click(object sender, EventArgs e)
        {
            if (objlogin.Validar_login(txt_email.Text, txt_password.Text))
            {
                this.Visible = false;
                frmMenu menu = new frmMenu();
                menu.ShowDialog();
                this.Visible = true;
            }
            else
            {
                MetroFramework.MetroMessageBox.Show(this, "Usuário ou senha invalidos", "Error login", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void frmLogin_Load(object sender, EventArgs e)
        {
            this.AcceptButton = btn_login;
        }
    }
}
