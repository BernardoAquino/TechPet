using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;

namespace TechPet
{
    class Login
    {
        ConexaoBD bd = new ConexaoBD();

        static string usuario;
        static string CNPJ;

        public bool Validar_login(string login, string senha)
        {
            string sql = string.Format("select * from Petshop where email = '{0}' and senha = '{1}'", login, senha);
            DataTable dt = bd.ConsultarTabelas(sql);

            if (dt.Rows.Count > 0)
            {
                usuario = dt.Rows[0]["Nome"].ToString();
                CNPJ = dt.Rows[0]["CNPJ"].ToString();
                return true;
            }
            else
            {
                return false;
            }
        }

        public string getUsuario()
        {
            return usuario;
        }

        public string getCNPJ()
        {
            return CNPJ;
        }
    }
}
