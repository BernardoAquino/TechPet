namespace TechPet
{
    partial class frmProdutos
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle3 = new System.Windows.Forms.DataGridViewCellStyle();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmProdutos));
            this.dgv_listar = new MetroFramework.Controls.MetroGrid();
            this.lbl_codigo = new MetroFramework.Controls.MetroLabel();
            this.txt_codigo = new MetroFramework.Controls.MetroTextBox();
            this.txt_nome = new MetroFramework.Controls.MetroTextBox();
            this.lbl_nome = new MetroFramework.Controls.MetroLabel();
            this.txt_valor = new MetroFramework.Controls.MetroTextBox();
            this.lbl_valor = new MetroFramework.Controls.MetroLabel();
            this.metroLabel2 = new MetroFramework.Controls.MetroLabel();
            this.txt_descricao = new MetroFramework.Controls.MetroTextBox();
            this.metroLabel1 = new MetroFramework.Controls.MetroLabel();
            this.txt_quantidade = new MetroFramework.Controls.MetroTextBox();
            this.lbl_quantidade = new MetroFramework.Controls.MetroLabel();
            this.ofd_foto = new System.Windows.Forms.OpenFileDialog();
            this.btn_foto = new System.Windows.Forms.Button();
            this.ptx_foto = new System.Windows.Forms.PictureBox();
            this.btn_voltar = new System.Windows.Forms.Button();
            this.btn_excluir = new System.Windows.Forms.Button();
            this.btn_buscar = new System.Windows.Forms.Button();
            this.btn_alterar = new System.Windows.Forms.Button();
            this.btn_salvar = new System.Windows.Forms.Button();
            this.frmProdutosBindingSource = new System.Windows.Forms.BindingSource(this.components);
            ((System.ComponentModel.ISupportInitialize)(this.dgv_listar)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptx_foto)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.frmProdutosBindingSource)).BeginInit();
            this.SuspendLayout();
            // 
            // dgv_listar
            // 
            this.dgv_listar.AllowUserToResizeRows = false;
            this.dgv_listar.BackgroundColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(255)))));
            this.dgv_listar.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.dgv_listar.CellBorderStyle = System.Windows.Forms.DataGridViewCellBorderStyle.None;
            this.dgv_listar.ColumnHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.None;
            dataGridViewCellStyle1.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(174)))), ((int)(((byte)(219)))));
            dataGridViewCellStyle1.Font = new System.Drawing.Font("Segoe UI", 11F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Pixel);
            dataGridViewCellStyle1.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(255)))));
            dataGridViewCellStyle1.SelectionBackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(198)))), ((int)(((byte)(247)))));
            dataGridViewCellStyle1.SelectionForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(17)))), ((int)(((byte)(17)))), ((int)(((byte)(17)))));
            dataGridViewCellStyle1.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dgv_listar.ColumnHeadersDefaultCellStyle = dataGridViewCellStyle1;
            this.dgv_listar.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            dataGridViewCellStyle2.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(255)))));
            dataGridViewCellStyle2.Font = new System.Drawing.Font("Segoe UI", 11F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Pixel);
            dataGridViewCellStyle2.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(136)))), ((int)(((byte)(136)))), ((int)(((byte)(136)))));
            dataGridViewCellStyle2.SelectionBackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(198)))), ((int)(((byte)(247)))));
            dataGridViewCellStyle2.SelectionForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(17)))), ((int)(((byte)(17)))), ((int)(((byte)(17)))));
            dataGridViewCellStyle2.WrapMode = System.Windows.Forms.DataGridViewTriState.False;
            this.dgv_listar.DefaultCellStyle = dataGridViewCellStyle2;
            this.dgv_listar.EnableHeadersVisualStyles = false;
            this.dgv_listar.Font = new System.Drawing.Font("Segoe UI", 11F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Pixel);
            this.dgv_listar.GridColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(255)))));
            this.dgv_listar.Location = new System.Drawing.Point(23, 63);
            this.dgv_listar.Name = "dgv_listar";
            this.dgv_listar.RowHeadersBorderStyle = System.Windows.Forms.DataGridViewHeaderBorderStyle.None;
            dataGridViewCellStyle3.Alignment = System.Windows.Forms.DataGridViewContentAlignment.MiddleLeft;
            dataGridViewCellStyle3.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(174)))), ((int)(((byte)(219)))));
            dataGridViewCellStyle3.Font = new System.Drawing.Font("Segoe UI", 11F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Pixel);
            dataGridViewCellStyle3.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(255)))));
            dataGridViewCellStyle3.SelectionBackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(198)))), ((int)(((byte)(247)))));
            dataGridViewCellStyle3.SelectionForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(17)))), ((int)(((byte)(17)))), ((int)(((byte)(17)))));
            dataGridViewCellStyle3.WrapMode = System.Windows.Forms.DataGridViewTriState.True;
            this.dgv_listar.RowHeadersDefaultCellStyle = dataGridViewCellStyle3;
            this.dgv_listar.RowHeadersWidthSizeMode = System.Windows.Forms.DataGridViewRowHeadersWidthSizeMode.DisableResizing;
            this.dgv_listar.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.dgv_listar.Size = new System.Drawing.Size(655, 555);
            this.dgv_listar.TabIndex = 0;
            this.dgv_listar.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dgv_listar_CellContentClick);
            // 
            // lbl_codigo
            // 
            this.lbl_codigo.AutoSize = true;
            this.lbl_codigo.Location = new System.Drawing.Point(708, 69);
            this.lbl_codigo.Name = "lbl_codigo";
            this.lbl_codigo.Size = new System.Drawing.Size(56, 19);
            this.lbl_codigo.TabIndex = 2;
            this.lbl_codigo.Text = "Codigo:";
            // 
            // txt_codigo
            // 
            // 
            // 
            // 
            this.txt_codigo.CustomButton.Image = null;
            this.txt_codigo.CustomButton.Location = new System.Drawing.Point(68, 1);
            this.txt_codigo.CustomButton.Name = "";
            this.txt_codigo.CustomButton.Size = new System.Drawing.Size(21, 21);
            this.txt_codigo.CustomButton.Style = MetroFramework.MetroColorStyle.Blue;
            this.txt_codigo.CustomButton.TabIndex = 1;
            this.txt_codigo.CustomButton.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_codigo.CustomButton.UseSelectable = true;
            this.txt_codigo.CustomButton.Visible = false;
            this.txt_codigo.Lines = new string[0];
            this.txt_codigo.Location = new System.Drawing.Point(787, 69);
            this.txt_codigo.MaxLength = 32767;
            this.txt_codigo.Name = "txt_codigo";
            this.txt_codigo.PasswordChar = '\0';
            this.txt_codigo.ReadOnly = true;
            this.txt_codigo.ScrollBars = System.Windows.Forms.ScrollBars.None;
            this.txt_codigo.SelectedText = "";
            this.txt_codigo.SelectionLength = 0;
            this.txt_codigo.SelectionStart = 0;
            this.txt_codigo.ShortcutsEnabled = true;
            this.txt_codigo.Size = new System.Drawing.Size(90, 23);
            this.txt_codigo.TabIndex = 1;
            this.txt_codigo.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_codigo.UseSelectable = true;
            this.txt_codigo.WaterMarkColor = System.Drawing.Color.FromArgb(((int)(((byte)(109)))), ((int)(((byte)(109)))), ((int)(((byte)(109)))));
            this.txt_codigo.WaterMarkFont = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Pixel);
            // 
            // txt_nome
            // 
            // 
            // 
            // 
            this.txt_nome.CustomButton.Image = null;
            this.txt_nome.CustomButton.Location = new System.Drawing.Point(240, 1);
            this.txt_nome.CustomButton.Name = "";
            this.txt_nome.CustomButton.Size = new System.Drawing.Size(21, 21);
            this.txt_nome.CustomButton.Style = MetroFramework.MetroColorStyle.Blue;
            this.txt_nome.CustomButton.TabIndex = 1;
            this.txt_nome.CustomButton.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_nome.CustomButton.UseSelectable = true;
            this.txt_nome.CustomButton.Visible = false;
            this.txt_nome.Lines = new string[0];
            this.txt_nome.Location = new System.Drawing.Point(787, 108);
            this.txt_nome.MaxLength = 32767;
            this.txt_nome.Name = "txt_nome";
            this.txt_nome.PasswordChar = '\0';
            this.txt_nome.ScrollBars = System.Windows.Forms.ScrollBars.None;
            this.txt_nome.SelectedText = "";
            this.txt_nome.SelectionLength = 0;
            this.txt_nome.SelectionStart = 0;
            this.txt_nome.ShortcutsEnabled = true;
            this.txt_nome.Size = new System.Drawing.Size(262, 23);
            this.txt_nome.TabIndex = 2;
            this.txt_nome.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_nome.UseSelectable = true;
            this.txt_nome.WaterMarkColor = System.Drawing.Color.FromArgb(((int)(((byte)(109)))), ((int)(((byte)(109)))), ((int)(((byte)(109)))));
            this.txt_nome.WaterMarkFont = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Pixel);
            // 
            // lbl_nome
            // 
            this.lbl_nome.AutoSize = true;
            this.lbl_nome.Location = new System.Drawing.Point(708, 109);
            this.lbl_nome.Name = "lbl_nome";
            this.lbl_nome.Size = new System.Drawing.Size(49, 19);
            this.lbl_nome.TabIndex = 4;
            this.lbl_nome.Text = "Nome:";
            // 
            // txt_valor
            // 
            // 
            // 
            // 
            this.txt_valor.CustomButton.Image = null;
            this.txt_valor.CustomButton.Location = new System.Drawing.Point(79, 1);
            this.txt_valor.CustomButton.Name = "";
            this.txt_valor.CustomButton.Size = new System.Drawing.Size(21, 21);
            this.txt_valor.CustomButton.Style = MetroFramework.MetroColorStyle.Blue;
            this.txt_valor.CustomButton.TabIndex = 1;
            this.txt_valor.CustomButton.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_valor.CustomButton.UseSelectable = true;
            this.txt_valor.CustomButton.Visible = false;
            this.txt_valor.Lines = new string[0];
            this.txt_valor.Location = new System.Drawing.Point(787, 147);
            this.txt_valor.MaxLength = 32767;
            this.txt_valor.Name = "txt_valor";
            this.txt_valor.PasswordChar = '\0';
            this.txt_valor.ScrollBars = System.Windows.Forms.ScrollBars.None;
            this.txt_valor.SelectedText = "";
            this.txt_valor.SelectionLength = 0;
            this.txt_valor.SelectionStart = 0;
            this.txt_valor.ShortcutsEnabled = true;
            this.txt_valor.Size = new System.Drawing.Size(101, 23);
            this.txt_valor.TabIndex = 3;
            this.txt_valor.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_valor.UseSelectable = true;
            this.txt_valor.WaterMarkColor = System.Drawing.Color.FromArgb(((int)(((byte)(109)))), ((int)(((byte)(109)))), ((int)(((byte)(109)))));
            this.txt_valor.WaterMarkFont = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Pixel);
            // 
            // lbl_valor
            // 
            this.lbl_valor.AutoSize = true;
            this.lbl_valor.Location = new System.Drawing.Point(708, 149);
            this.lbl_valor.Name = "lbl_valor";
            this.lbl_valor.Size = new System.Drawing.Size(42, 19);
            this.lbl_valor.TabIndex = 6;
            this.lbl_valor.Text = "Valor:";
            // 
            // metroLabel2
            // 
            this.metroLabel2.AutoSize = true;
            this.metroLabel2.BackColor = System.Drawing.Color.White;
            this.metroLabel2.FontSize = MetroFramework.MetroLabelSize.Small;
            this.metroLabel2.ForeColor = System.Drawing.Color.Black;
            this.metroLabel2.Location = new System.Drawing.Point(1081, 619);
            this.metroLabel2.Name = "metroLabel2";
            this.metroLabel2.Size = new System.Drawing.Size(27, 15);
            this.metroLabel2.TabIndex = 8;
            this.metroLabel2.Text = "V1.0";
            this.metroLabel2.UseCustomBackColor = true;
            this.metroLabel2.UseCustomForeColor = true;
            // 
            // txt_descricao
            // 
            // 
            // 
            // 
            this.txt_descricao.CustomButton.Image = null;
            this.txt_descricao.CustomButton.Location = new System.Drawing.Point(240, 1);
            this.txt_descricao.CustomButton.Name = "";
            this.txt_descricao.CustomButton.Size = new System.Drawing.Size(21, 21);
            this.txt_descricao.CustomButton.Style = MetroFramework.MetroColorStyle.Blue;
            this.txt_descricao.CustomButton.TabIndex = 1;
            this.txt_descricao.CustomButton.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_descricao.CustomButton.UseSelectable = true;
            this.txt_descricao.CustomButton.Visible = false;
            this.txt_descricao.Lines = new string[0];
            this.txt_descricao.Location = new System.Drawing.Point(787, 225);
            this.txt_descricao.MaxLength = 32767;
            this.txt_descricao.Name = "txt_descricao";
            this.txt_descricao.PasswordChar = '\0';
            this.txt_descricao.ScrollBars = System.Windows.Forms.ScrollBars.None;
            this.txt_descricao.SelectedText = "";
            this.txt_descricao.SelectionLength = 0;
            this.txt_descricao.SelectionStart = 0;
            this.txt_descricao.ShortcutsEnabled = true;
            this.txt_descricao.Size = new System.Drawing.Size(262, 23);
            this.txt_descricao.TabIndex = 5;
            this.txt_descricao.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_descricao.UseSelectable = true;
            this.txt_descricao.WaterMarkColor = System.Drawing.Color.FromArgb(((int)(((byte)(109)))), ((int)(((byte)(109)))), ((int)(((byte)(109)))));
            this.txt_descricao.WaterMarkFont = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Pixel);
            // 
            // metroLabel1
            // 
            this.metroLabel1.AutoSize = true;
            this.metroLabel1.Location = new System.Drawing.Point(708, 229);
            this.metroLabel1.Name = "metroLabel1";
            this.metroLabel1.Size = new System.Drawing.Size(68, 19);
            this.metroLabel1.TabIndex = 14;
            this.metroLabel1.Text = "Descrição:";
            // 
            // txt_quantidade
            // 
            // 
            // 
            // 
            this.txt_quantidade.CustomButton.Image = null;
            this.txt_quantidade.CustomButton.Location = new System.Drawing.Point(79, 1);
            this.txt_quantidade.CustomButton.Name = "";
            this.txt_quantidade.CustomButton.Size = new System.Drawing.Size(21, 21);
            this.txt_quantidade.CustomButton.Style = MetroFramework.MetroColorStyle.Blue;
            this.txt_quantidade.CustomButton.TabIndex = 1;
            this.txt_quantidade.CustomButton.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_quantidade.CustomButton.UseSelectable = true;
            this.txt_quantidade.CustomButton.Visible = false;
            this.txt_quantidade.Lines = new string[0];
            this.txt_quantidade.Location = new System.Drawing.Point(787, 186);
            this.txt_quantidade.MaxLength = 32767;
            this.txt_quantidade.Name = "txt_quantidade";
            this.txt_quantidade.PasswordChar = '\0';
            this.txt_quantidade.ScrollBars = System.Windows.Forms.ScrollBars.None;
            this.txt_quantidade.SelectedText = "";
            this.txt_quantidade.SelectionLength = 0;
            this.txt_quantidade.SelectionStart = 0;
            this.txt_quantidade.ShortcutsEnabled = true;
            this.txt_quantidade.Size = new System.Drawing.Size(101, 23);
            this.txt_quantidade.TabIndex = 4;
            this.txt_quantidade.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_quantidade.UseSelectable = true;
            this.txt_quantidade.WaterMarkColor = System.Drawing.Color.FromArgb(((int)(((byte)(109)))), ((int)(((byte)(109)))), ((int)(((byte)(109)))));
            this.txt_quantidade.WaterMarkFont = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Pixel);
            // 
            // lbl_quantidade
            // 
            this.lbl_quantidade.AutoSize = true;
            this.lbl_quantidade.Location = new System.Drawing.Point(708, 189);
            this.lbl_quantidade.Name = "lbl_quantidade";
            this.lbl_quantidade.Size = new System.Drawing.Size(81, 19);
            this.lbl_quantidade.TabIndex = 18;
            this.lbl_quantidade.Text = "Quantidade:";
            // 
            // ofd_foto
            // 
            this.ofd_foto.FileName = "openFileDialog1";
            // 
            // btn_foto
            // 
            this.btn_foto.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(173)))), ((int)(((byte)(223)))));
            this.btn_foto.FlatAppearance.BorderSize = 0;
            this.btn_foto.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_foto.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_foto.ForeColor = System.Drawing.Color.Black;
            this.btn_foto.Image = global::TechPet.Properties.Resources.save;
            this.btn_foto.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btn_foto.Location = new System.Drawing.Point(708, 441);
            this.btn_foto.Name = "btn_foto";
            this.btn_foto.Size = new System.Drawing.Size(351, 48);
            this.btn_foto.TabIndex = 6;
            this.btn_foto.Text = "Escolha a imagem";
            this.btn_foto.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btn_foto.UseVisualStyleBackColor = false;
            this.btn_foto.Click += new System.EventHandler(this.btn_foto_Click);
            // 
            // ptx_foto
            // 
            this.ptx_foto.Image = global::TechPet.Properties.Resources.semfoto;
            this.ptx_foto.Location = new System.Drawing.Point(708, 274);
            this.ptx_foto.Name = "ptx_foto";
            this.ptx_foto.Size = new System.Drawing.Size(351, 161);
            this.ptx_foto.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptx_foto.TabIndex = 16;
            this.ptx_foto.TabStop = false;
            // 
            // btn_voltar
            // 
            this.btn_voltar.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(173)))), ((int)(((byte)(223)))));
            this.btn_voltar.FlatAppearance.BorderSize = 0;
            this.btn_voltar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_voltar.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_voltar.ForeColor = System.Drawing.Color.Black;
            this.btn_voltar.Image = global::TechPet.Properties.Resources.voltar;
            this.btn_voltar.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btn_voltar.Location = new System.Drawing.Point(945, 35);
            this.btn_voltar.Name = "btn_voltar";
            this.btn_voltar.Size = new System.Drawing.Size(104, 48);
            this.btn_voltar.TabIndex = 11;
            this.btn_voltar.Text = "Voltar";
            this.btn_voltar.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btn_voltar.UseVisualStyleBackColor = false;
            this.btn_voltar.Click += new System.EventHandler(this.btn_voltar_Click);
            // 
            // btn_excluir
            // 
            this.btn_excluir.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(173)))), ((int)(((byte)(223)))));
            this.btn_excluir.FlatAppearance.BorderSize = 0;
            this.btn_excluir.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_excluir.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_excluir.ForeColor = System.Drawing.Color.Black;
            this.btn_excluir.Image = global::TechPet.Properties.Resources.excluir;
            this.btn_excluir.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btn_excluir.Location = new System.Drawing.Point(830, 574);
            this.btn_excluir.Name = "btn_excluir";
            this.btn_excluir.Size = new System.Drawing.Size(104, 48);
            this.btn_excluir.TabIndex = 10;
            this.btn_excluir.Text = "Excluir";
            this.btn_excluir.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btn_excluir.UseVisualStyleBackColor = false;
            this.btn_excluir.Click += new System.EventHandler(this.btn_excluir_Click);
            // 
            // btn_buscar
            // 
            this.btn_buscar.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(173)))), ((int)(((byte)(223)))));
            this.btn_buscar.FlatAppearance.BorderSize = 0;
            this.btn_buscar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_buscar.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_buscar.ForeColor = System.Drawing.Color.Black;
            this.btn_buscar.Image = global::TechPet.Properties.Resources.procurar;
            this.btn_buscar.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btn_buscar.Location = new System.Drawing.Point(955, 515);
            this.btn_buscar.Name = "btn_buscar";
            this.btn_buscar.Size = new System.Drawing.Size(104, 48);
            this.btn_buscar.TabIndex = 9;
            this.btn_buscar.Text = "Buscar";
            this.btn_buscar.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btn_buscar.UseVisualStyleBackColor = false;
            this.btn_buscar.Click += new System.EventHandler(this.btn_buscar_Click);
            // 
            // btn_alterar
            // 
            this.btn_alterar.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(173)))), ((int)(((byte)(223)))));
            this.btn_alterar.FlatAppearance.BorderSize = 0;
            this.btn_alterar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_alterar.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_alterar.ForeColor = System.Drawing.Color.Black;
            this.btn_alterar.Image = global::TechPet.Properties.Resources.alterar;
            this.btn_alterar.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btn_alterar.Location = new System.Drawing.Point(830, 515);
            this.btn_alterar.Name = "btn_alterar";
            this.btn_alterar.Size = new System.Drawing.Size(104, 48);
            this.btn_alterar.TabIndex = 8;
            this.btn_alterar.Text = "Alterar";
            this.btn_alterar.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btn_alterar.UseVisualStyleBackColor = false;
            this.btn_alterar.Click += new System.EventHandler(this.btn_alterar_Click);
            // 
            // btn_salvar
            // 
            this.btn_salvar.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(173)))), ((int)(((byte)(223)))));
            this.btn_salvar.FlatAppearance.BorderSize = 0;
            this.btn_salvar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_salvar.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_salvar.ForeColor = System.Drawing.Color.Black;
            this.btn_salvar.Image = global::TechPet.Properties.Resources.save;
            this.btn_salvar.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btn_salvar.Location = new System.Drawing.Point(705, 515);
            this.btn_salvar.Name = "btn_salvar";
            this.btn_salvar.Size = new System.Drawing.Size(104, 48);
            this.btn_salvar.TabIndex = 7;
            this.btn_salvar.Text = "Salvar";
            this.btn_salvar.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btn_salvar.UseVisualStyleBackColor = false;
            this.btn_salvar.Click += new System.EventHandler(this.btn_salvar_Click);
            // 
            // frmProdutosBindingSource
            // 
            this.frmProdutosBindingSource.DataSource = typeof(TechPet.frmProdutos);
            // 
            // frmProdutos
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1109, 641);
            this.Controls.Add(this.txt_quantidade);
            this.Controls.Add(this.lbl_quantidade);
            this.Controls.Add(this.btn_foto);
            this.Controls.Add(this.ptx_foto);
            this.Controls.Add(this.txt_descricao);
            this.Controls.Add(this.metroLabel1);
            this.Controls.Add(this.btn_voltar);
            this.Controls.Add(this.btn_excluir);
            this.Controls.Add(this.btn_buscar);
            this.Controls.Add(this.btn_alterar);
            this.Controls.Add(this.btn_salvar);
            this.Controls.Add(this.metroLabel2);
            this.Controls.Add(this.txt_valor);
            this.Controls.Add(this.lbl_valor);
            this.Controls.Add(this.txt_nome);
            this.Controls.Add(this.lbl_nome);
            this.Controls.Add(this.txt_codigo);
            this.Controls.Add(this.lbl_codigo);
            this.Controls.Add(this.dgv_listar);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MaximizeBox = false;
            this.Name = "frmProdutos";
            this.Resizable = false;
            this.SizeGripStyle = System.Windows.Forms.SizeGripStyle.Hide;
            this.Text = "Produtos";
            this.Load += new System.EventHandler(this.frmProdutos_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dgv_listar)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptx_foto)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.frmProdutosBindingSource)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private MetroFramework.Controls.MetroGrid dgv_listar;
        private MetroFramework.Controls.MetroLabel lbl_codigo;
        private MetroFramework.Controls.MetroTextBox txt_codigo;
        private MetroFramework.Controls.MetroTextBox txt_nome;
        private MetroFramework.Controls.MetroLabel lbl_nome;
        private MetroFramework.Controls.MetroTextBox txt_valor;
        private MetroFramework.Controls.MetroLabel lbl_valor;
        private MetroFramework.Controls.MetroLabel metroLabel2;
        private System.Windows.Forms.Button btn_salvar;
        private System.Windows.Forms.Button btn_alterar;
        private System.Windows.Forms.Button btn_buscar;
        private System.Windows.Forms.Button btn_excluir;
        private System.Windows.Forms.Button btn_voltar;
        private MetroFramework.Controls.MetroTextBox txt_descricao;
        private MetroFramework.Controls.MetroLabel metroLabel1;
        private System.Windows.Forms.PictureBox ptx_foto;
        private System.Windows.Forms.Button btn_foto;
        private MetroFramework.Controls.MetroTextBox txt_quantidade;
        private MetroFramework.Controls.MetroLabel lbl_quantidade;
        private System.Windows.Forms.OpenFileDialog ofd_foto;
        private System.Windows.Forms.BindingSource frmProdutosBindingSource;
    }
}