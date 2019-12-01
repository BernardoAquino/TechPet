namespace TechPet
{
    partial class frmServicos
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
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle1 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle2 = new System.Windows.Forms.DataGridViewCellStyle();
            System.Windows.Forms.DataGridViewCellStyle dataGridViewCellStyle3 = new System.Windows.Forms.DataGridViewCellStyle();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmServicos));
            this.txt_tipo = new MetroFramework.Controls.MetroTextBox();
            this.dtp_data = new MetroFramework.Controls.MetroDateTime();
            this.lbl_data = new MetroFramework.Controls.MetroLabel();
            this.lbl_servico = new MetroFramework.Controls.MetroLabel();
            this.metroLabel2 = new MetroFramework.Controls.MetroLabel();
            this.txt_codigo = new MetroFramework.Controls.MetroTextBox();
            this.lbl_codigo = new MetroFramework.Controls.MetroLabel();
            this.dgv_listar = new MetroFramework.Controls.MetroGrid();
            this.lbl_petcodigo = new MetroFramework.Controls.MetroLabel();
            this.lbl_cnpj = new MetroFramework.Controls.MetroLabel();
            this.txt_CNPJ = new MetroFramework.Controls.MetroTextBox();
            this.btn_voltar = new System.Windows.Forms.Button();
            this.btn_efetuada = new System.Windows.Forms.Button();
            this.btn_listar = new System.Windows.Forms.Button();
            this.btn_alterar = new System.Windows.Forms.Button();
            this.btn_salvar = new System.Windows.Forms.Button();
            this.lbl_hora = new MetroFramework.Controls.MetroLabel();
            this.dtp_hora = new MetroFramework.Controls.MetroDateTime();
            this.cbx_codigo = new MetroFramework.Controls.MetroComboBox();
            ((System.ComponentModel.ISupportInitialize)(this.dgv_listar)).BeginInit();
            this.SuspendLayout();
            // 
            // txt_tipo
            // 
            // 
            // 
            // 
            this.txt_tipo.CustomButton.Image = null;
            this.txt_tipo.CustomButton.Location = new System.Drawing.Point(193, 1);
            this.txt_tipo.CustomButton.Name = "";
            this.txt_tipo.CustomButton.Size = new System.Drawing.Size(21, 21);
            this.txt_tipo.CustomButton.Style = MetroFramework.MetroColorStyle.Blue;
            this.txt_tipo.CustomButton.TabIndex = 1;
            this.txt_tipo.CustomButton.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_tipo.CustomButton.UseSelectable = true;
            this.txt_tipo.CustomButton.Visible = false;
            this.txt_tipo.Lines = new string[0];
            this.txt_tipo.Location = new System.Drawing.Point(914, 114);
            this.txt_tipo.MaxLength = 32767;
            this.txt_tipo.Name = "txt_tipo";
            this.txt_tipo.PasswordChar = '\0';
            this.txt_tipo.ScrollBars = System.Windows.Forms.ScrollBars.None;
            this.txt_tipo.SelectedText = "";
            this.txt_tipo.SelectionLength = 0;
            this.txt_tipo.SelectionStart = 0;
            this.txt_tipo.ShortcutsEnabled = true;
            this.txt_tipo.Size = new System.Drawing.Size(215, 23);
            this.txt_tipo.TabIndex = 2;
            this.txt_tipo.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_tipo.UseSelectable = true;
            this.txt_tipo.WaterMarkColor = System.Drawing.Color.FromArgb(((int)(((byte)(109)))), ((int)(((byte)(109)))), ((int)(((byte)(109)))));
            this.txt_tipo.WaterMarkFont = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Pixel);
            // 
            // dtp_data
            // 
            this.dtp_data.Location = new System.Drawing.Point(914, 154);
            this.dtp_data.MinimumSize = new System.Drawing.Size(0, 29);
            this.dtp_data.Name = "dtp_data";
            this.dtp_data.Size = new System.Drawing.Size(200, 29);
            this.dtp_data.TabIndex = 3;
            // 
            // lbl_data
            // 
            this.lbl_data.AutoSize = true;
            this.lbl_data.Location = new System.Drawing.Point(790, 160);
            this.lbl_data.Name = "lbl_data";
            this.lbl_data.Size = new System.Drawing.Size(39, 19);
            this.lbl_data.TabIndex = 54;
            this.lbl_data.Text = "Data:";
            // 
            // lbl_servico
            // 
            this.lbl_servico.AutoSize = true;
            this.lbl_servico.Location = new System.Drawing.Point(790, 118);
            this.lbl_servico.Name = "lbl_servico";
            this.lbl_servico.Size = new System.Drawing.Size(104, 19);
            this.lbl_servico.TabIndex = 53;
            this.lbl_servico.Text = "Tipo de Serviço:";
            // 
            // metroLabel2
            // 
            this.metroLabel2.AutoSize = true;
            this.metroLabel2.BackColor = System.Drawing.Color.White;
            this.metroLabel2.FontSize = MetroFramework.MetroLabelSize.Small;
            this.metroLabel2.ForeColor = System.Drawing.Color.Black;
            this.metroLabel2.Location = new System.Drawing.Point(1162, 451);
            this.metroLabel2.Name = "metroLabel2";
            this.metroLabel2.Size = new System.Drawing.Size(27, 15);
            this.metroLabel2.TabIndex = 48;
            this.metroLabel2.Text = "V1.0";
            this.metroLabel2.UseCustomBackColor = true;
            this.metroLabel2.UseCustomForeColor = true;
            // 
            // txt_codigo
            // 
            // 
            // 
            // 
            this.txt_codigo.CustomButton.Image = null;
            this.txt_codigo.CustomButton.Location = new System.Drawing.Point(91, 1);
            this.txt_codigo.CustomButton.Name = "";
            this.txt_codigo.CustomButton.Size = new System.Drawing.Size(21, 21);
            this.txt_codigo.CustomButton.Style = MetroFramework.MetroColorStyle.Blue;
            this.txt_codigo.CustomButton.TabIndex = 1;
            this.txt_codigo.CustomButton.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_codigo.CustomButton.UseSelectable = true;
            this.txt_codigo.CustomButton.Visible = false;
            this.txt_codigo.Lines = new string[0];
            this.txt_codigo.Location = new System.Drawing.Point(914, 79);
            this.txt_codigo.MaxLength = 32767;
            this.txt_codigo.Name = "txt_codigo";
            this.txt_codigo.PasswordChar = '\0';
            this.txt_codigo.ReadOnly = true;
            this.txt_codigo.ScrollBars = System.Windows.Forms.ScrollBars.None;
            this.txt_codigo.SelectedText = "";
            this.txt_codigo.SelectionLength = 0;
            this.txt_codigo.SelectionStart = 0;
            this.txt_codigo.ShortcutsEnabled = true;
            this.txt_codigo.Size = new System.Drawing.Size(113, 23);
            this.txt_codigo.TabIndex = 1;
            this.txt_codigo.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_codigo.UseSelectable = true;
            this.txt_codigo.WaterMarkColor = System.Drawing.Color.FromArgb(((int)(((byte)(109)))), ((int)(((byte)(109)))), ((int)(((byte)(109)))));
            this.txt_codigo.WaterMarkFont = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Pixel);
            // 
            // lbl_codigo
            // 
            this.lbl_codigo.AutoSize = true;
            this.lbl_codigo.Location = new System.Drawing.Point(790, 79);
            this.lbl_codigo.Name = "lbl_codigo";
            this.lbl_codigo.Size = new System.Drawing.Size(56, 19);
            this.lbl_codigo.TabIndex = 45;
            this.lbl_codigo.Text = "Código:";
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
            this.dgv_listar.Size = new System.Drawing.Size(747, 375);
            this.dgv_listar.TabIndex = 43;
            this.dgv_listar.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dgv_listar_CellContentClick);
            // 
            // lbl_petcodigo
            // 
            this.lbl_petcodigo.AutoSize = true;
            this.lbl_petcodigo.Location = new System.Drawing.Point(787, 247);
            this.lbl_petcodigo.Name = "lbl_petcodigo";
            this.lbl_petcodigo.Size = new System.Drawing.Size(121, 19);
            this.lbl_petcodigo.TabIndex = 59;
            this.lbl_petcodigo.Text = "Código do Animal:";
            // 
            // lbl_cnpj
            // 
            this.lbl_cnpj.AutoSize = true;
            this.lbl_cnpj.Location = new System.Drawing.Point(790, 289);
            this.lbl_cnpj.Name = "lbl_cnpj";
            this.lbl_cnpj.Size = new System.Drawing.Size(117, 19);
            this.lbl_cnpj.TabIndex = 61;
            this.lbl_cnpj.Text = "CNPJ da empresa:";
            // 
            // txt_CNPJ
            // 
            // 
            // 
            // 
            this.txt_CNPJ.CustomButton.Image = null;
            this.txt_CNPJ.CustomButton.Location = new System.Drawing.Point(129, 1);
            this.txt_CNPJ.CustomButton.Name = "";
            this.txt_CNPJ.CustomButton.Size = new System.Drawing.Size(21, 21);
            this.txt_CNPJ.CustomButton.Style = MetroFramework.MetroColorStyle.Blue;
            this.txt_CNPJ.CustomButton.TabIndex = 1;
            this.txt_CNPJ.CustomButton.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_CNPJ.CustomButton.UseSelectable = true;
            this.txt_CNPJ.CustomButton.Visible = false;
            this.txt_CNPJ.Lines = new string[0];
            this.txt_CNPJ.Location = new System.Drawing.Point(914, 285);
            this.txt_CNPJ.MaxLength = 32767;
            this.txt_CNPJ.Name = "txt_CNPJ";
            this.txt_CNPJ.PasswordChar = '\0';
            this.txt_CNPJ.ReadOnly = true;
            this.txt_CNPJ.ScrollBars = System.Windows.Forms.ScrollBars.None;
            this.txt_CNPJ.SelectedText = "";
            this.txt_CNPJ.SelectionLength = 0;
            this.txt_CNPJ.SelectionStart = 0;
            this.txt_CNPJ.ShortcutsEnabled = true;
            this.txt_CNPJ.Size = new System.Drawing.Size(151, 23);
            this.txt_CNPJ.TabIndex = 6;
            this.txt_CNPJ.Theme = MetroFramework.MetroThemeStyle.Light;
            this.txt_CNPJ.UseSelectable = true;
            this.txt_CNPJ.WaterMarkColor = System.Drawing.Color.FromArgb(((int)(((byte)(109)))), ((int)(((byte)(109)))), ((int)(((byte)(109)))));
            this.txt_CNPJ.WaterMarkFont = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Pixel);
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
            this.btn_voltar.Location = new System.Drawing.Point(1037, 35);
            this.btn_voltar.Name = "btn_voltar";
            this.btn_voltar.Size = new System.Drawing.Size(104, 48);
            this.btn_voltar.TabIndex = 11;
            this.btn_voltar.Text = "Voltar";
            this.btn_voltar.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btn_voltar.UseVisualStyleBackColor = false;
            this.btn_voltar.Click += new System.EventHandler(this.btn_voltar_Click);
            // 
            // btn_efetuada
            // 
            this.btn_efetuada.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(173)))), ((int)(((byte)(223)))));
            this.btn_efetuada.FlatAppearance.BorderSize = 0;
            this.btn_efetuada.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_efetuada.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_efetuada.ForeColor = System.Drawing.Color.Black;
            this.btn_efetuada.Image = global::TechPet.Properties.Resources.efetuada;
            this.btn_efetuada.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btn_efetuada.Location = new System.Drawing.Point(902, 390);
            this.btn_efetuada.Name = "btn_efetuada";
            this.btn_efetuada.Size = new System.Drawing.Size(123, 48);
            this.btn_efetuada.TabIndex = 10;
            this.btn_efetuada.Text = "Efetuada";
            this.btn_efetuada.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btn_efetuada.UseVisualStyleBackColor = false;
            this.btn_efetuada.Click += new System.EventHandler(this.btn_efetuada_Click);
            // 
            // btn_listar
            // 
            this.btn_listar.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(1)))), ((int)(((byte)(173)))), ((int)(((byte)(223)))));
            this.btn_listar.FlatAppearance.BorderSize = 0;
            this.btn_listar.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btn_listar.Font = new System.Drawing.Font("Century Gothic", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btn_listar.ForeColor = System.Drawing.Color.Black;
            this.btn_listar.Image = global::TechPet.Properties.Resources.procurar;
            this.btn_listar.ImageAlign = System.Drawing.ContentAlignment.MiddleLeft;
            this.btn_listar.Location = new System.Drawing.Point(1037, 332);
            this.btn_listar.Name = "btn_listar";
            this.btn_listar.Size = new System.Drawing.Size(104, 48);
            this.btn_listar.TabIndex = 9;
            this.btn_listar.Text = "Listar";
            this.btn_listar.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btn_listar.UseVisualStyleBackColor = false;
            this.btn_listar.Click += new System.EventHandler(this.btn_listar_Click);
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
            this.btn_alterar.Location = new System.Drawing.Point(912, 332);
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
            this.btn_salvar.Location = new System.Drawing.Point(787, 332);
            this.btn_salvar.Name = "btn_salvar";
            this.btn_salvar.Size = new System.Drawing.Size(104, 48);
            this.btn_salvar.TabIndex = 7;
            this.btn_salvar.Text = "Salvar";
            this.btn_salvar.TextAlign = System.Drawing.ContentAlignment.MiddleRight;
            this.btn_salvar.UseVisualStyleBackColor = false;
            this.btn_salvar.Click += new System.EventHandler(this.btn_salvar_Click);
            // 
            // lbl_hora
            // 
            this.lbl_hora.AutoSize = true;
            this.lbl_hora.Location = new System.Drawing.Point(790, 206);
            this.lbl_hora.Name = "lbl_hora";
            this.lbl_hora.Size = new System.Drawing.Size(41, 19);
            this.lbl_hora.TabIndex = 63;
            this.lbl_hora.Text = "Hora:";
            // 
            // dtp_hora
            // 
            this.dtp_hora.Format = System.Windows.Forms.DateTimePickerFormat.Time;
            this.dtp_hora.Location = new System.Drawing.Point(914, 201);
            this.dtp_hora.MinimumSize = new System.Drawing.Size(0, 29);
            this.dtp_hora.Name = "dtp_hora";
            this.dtp_hora.Size = new System.Drawing.Size(200, 29);
            this.dtp_hora.TabIndex = 4;
            // 
            // cbx_codigo
            // 
            this.cbx_codigo.FormattingEnabled = true;
            this.cbx_codigo.ItemHeight = 23;
            this.cbx_codigo.Location = new System.Drawing.Point(914, 245);
            this.cbx_codigo.Name = "cbx_codigo";
            this.cbx_codigo.Size = new System.Drawing.Size(121, 29);
            this.cbx_codigo.TabIndex = 64;
            this.cbx_codigo.UseSelectable = true;
            // 
            // frmServicos
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1190, 470);
            this.Controls.Add(this.cbx_codigo);
            this.Controls.Add(this.dtp_hora);
            this.Controls.Add(this.lbl_hora);
            this.Controls.Add(this.txt_CNPJ);
            this.Controls.Add(this.lbl_cnpj);
            this.Controls.Add(this.lbl_petcodigo);
            this.Controls.Add(this.txt_tipo);
            this.Controls.Add(this.dtp_data);
            this.Controls.Add(this.lbl_data);
            this.Controls.Add(this.lbl_servico);
            this.Controls.Add(this.btn_voltar);
            this.Controls.Add(this.btn_efetuada);
            this.Controls.Add(this.btn_listar);
            this.Controls.Add(this.btn_alterar);
            this.Controls.Add(this.btn_salvar);
            this.Controls.Add(this.metroLabel2);
            this.Controls.Add(this.txt_codigo);
            this.Controls.Add(this.lbl_codigo);
            this.Controls.Add(this.dgv_listar);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MaximizeBox = false;
            this.Name = "frmServicos";
            this.Resizable = false;
            this.SizeGripStyle = System.Windows.Forms.SizeGripStyle.Hide;
            this.Text = "Serviços";
            this.Load += new System.EventHandler(this.frmConsultas_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dgv_listar)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private MetroFramework.Controls.MetroTextBox txt_tipo;
        private MetroFramework.Controls.MetroDateTime dtp_data;
        private MetroFramework.Controls.MetroLabel lbl_data;
        private MetroFramework.Controls.MetroLabel lbl_servico;
        private System.Windows.Forms.Button btn_voltar;
        private System.Windows.Forms.Button btn_efetuada;
        private System.Windows.Forms.Button btn_listar;
        private System.Windows.Forms.Button btn_alterar;
        private System.Windows.Forms.Button btn_salvar;
        private MetroFramework.Controls.MetroLabel metroLabel2;
        private MetroFramework.Controls.MetroTextBox txt_codigo;
        private MetroFramework.Controls.MetroLabel lbl_codigo;
        private MetroFramework.Controls.MetroGrid dgv_listar;
        private MetroFramework.Controls.MetroLabel lbl_petcodigo;
        private MetroFramework.Controls.MetroLabel lbl_cnpj;
        private MetroFramework.Controls.MetroTextBox txt_CNPJ;
        private MetroFramework.Controls.MetroLabel lbl_hora;
        private MetroFramework.Controls.MetroDateTime dtp_hora;
        private MetroFramework.Controls.MetroComboBox cbx_codigo;
    }
}