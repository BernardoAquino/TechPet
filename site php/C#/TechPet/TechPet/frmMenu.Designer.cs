namespace TechPet
{
    partial class frmMenu
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmMenu));
            this.metroLabel2 = new MetroFramework.Controls.MetroLabel();
            this.mtr_pets = new MetroFramework.Controls.MetroTile();
            this.mtr_consultas = new MetroFramework.Controls.MetroTile();
            this.mtr_vacinas = new MetroFramework.Controls.MetroTile();
            this.mtr_produtos = new MetroFramework.Controls.MetroTile();
            this.SuspendLayout();
            // 
            // metroLabel2
            // 
            this.metroLabel2.AutoSize = true;
            this.metroLabel2.BackColor = System.Drawing.Color.White;
            this.metroLabel2.FontSize = MetroFramework.MetroLabelSize.Small;
            this.metroLabel2.ForeColor = System.Drawing.Color.Black;
            this.metroLabel2.Location = new System.Drawing.Point(733, 433);
            this.metroLabel2.Name = "metroLabel2";
            this.metroLabel2.Size = new System.Drawing.Size(27, 15);
            this.metroLabel2.TabIndex = 7;
            this.metroLabel2.Text = "V1.0";
            this.metroLabel2.UseCustomBackColor = true;
            this.metroLabel2.UseCustomForeColor = true;
            // 
            // mtr_pets
            // 
            this.mtr_pets.ActiveControl = null;
            this.mtr_pets.Location = new System.Drawing.Point(268, 248);
            this.mtr_pets.Name = "mtr_pets";
            this.mtr_pets.Size = new System.Drawing.Size(225, 125);
            this.mtr_pets.Style = MetroFramework.MetroColorStyle.Blue;
            this.mtr_pets.TabIndex = 8;
            this.mtr_pets.Text = "Consultar Pets";
            this.mtr_pets.TileImage = global::TechPet.Properties.Resources.pets;
            this.mtr_pets.TileImageAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.mtr_pets.TileTextFontSize = MetroFramework.MetroTileTextSize.Tall;
            this.mtr_pets.UseCustomForeColor = true;
            this.mtr_pets.UseSelectable = true;
            this.mtr_pets.UseTileImage = true;
            this.mtr_pets.Click += new System.EventHandler(this.mtr_pets_Click);
            // 
            // mtr_consultas
            // 
            this.mtr_consultas.ActiveControl = null;
            this.mtr_consultas.Location = new System.Drawing.Point(513, 76);
            this.mtr_consultas.Name = "mtr_consultas";
            this.mtr_consultas.Size = new System.Drawing.Size(225, 125);
            this.mtr_consultas.Style = MetroFramework.MetroColorStyle.Blue;
            this.mtr_consultas.TabIndex = 2;
            this.mtr_consultas.Text = "Serviços";
            this.mtr_consultas.TileImage = global::TechPet.Properties.Resources.consultas;
            this.mtr_consultas.TileImageAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.mtr_consultas.TileTextFontSize = MetroFramework.MetroTileTextSize.Tall;
            this.mtr_consultas.UseCustomForeColor = true;
            this.mtr_consultas.UseSelectable = true;
            this.mtr_consultas.UseTileImage = true;
            this.mtr_consultas.Click += new System.EventHandler(this.mtr_consultas_Click);
            // 
            // mtr_vacinas
            // 
            this.mtr_vacinas.ActiveControl = null;
            this.mtr_vacinas.Location = new System.Drawing.Point(268, 76);
            this.mtr_vacinas.Name = "mtr_vacinas";
            this.mtr_vacinas.Size = new System.Drawing.Size(225, 125);
            this.mtr_vacinas.Style = MetroFramework.MetroColorStyle.Blue;
            this.mtr_vacinas.TabIndex = 1;
            this.mtr_vacinas.Text = "Vacinas";
            this.mtr_vacinas.TileImage = global::TechPet.Properties.Resources.vacinas;
            this.mtr_vacinas.TileImageAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.mtr_vacinas.TileTextFontSize = MetroFramework.MetroTileTextSize.Tall;
            this.mtr_vacinas.UseCustomForeColor = true;
            this.mtr_vacinas.UseSelectable = true;
            this.mtr_vacinas.UseTileImage = true;
            this.mtr_vacinas.Click += new System.EventHandler(this.mtr_vacinas_Click);
            // 
            // mtr_produtos
            // 
            this.mtr_produtos.ActiveControl = null;
            this.mtr_produtos.Location = new System.Drawing.Point(23, 76);
            this.mtr_produtos.Name = "mtr_produtos";
            this.mtr_produtos.Size = new System.Drawing.Size(225, 125);
            this.mtr_produtos.Style = MetroFramework.MetroColorStyle.Blue;
            this.mtr_produtos.TabIndex = 0;
            this.mtr_produtos.Text = "Produtos";
            this.mtr_produtos.TileImage = global::TechPet.Properties.Resources.produtos;
            this.mtr_produtos.TileImageAlign = System.Drawing.ContentAlignment.MiddleCenter;
            this.mtr_produtos.TileTextFontSize = MetroFramework.MetroTileTextSize.Tall;
            this.mtr_produtos.UseCustomForeColor = true;
            this.mtr_produtos.UseSelectable = true;
            this.mtr_produtos.UseTileImage = true;
            this.mtr_produtos.Click += new System.EventHandler(this.mtr_produtos_Click);
            // 
            // frmMenu
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(760, 450);
            this.Controls.Add(this.mtr_pets);
            this.Controls.Add(this.metroLabel2);
            this.Controls.Add(this.mtr_consultas);
            this.Controls.Add(this.mtr_vacinas);
            this.Controls.Add(this.mtr_produtos);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MaximizeBox = false;
            this.Name = "frmMenu";
            this.Resizable = false;
            this.SizeGripStyle = System.Windows.Forms.SizeGripStyle.Hide;
            this.Text = "Menu";
            this.Load += new System.EventHandler(this.frmMenu_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private MetroFramework.Controls.MetroTile mtr_produtos;
        private MetroFramework.Controls.MetroTile mtr_vacinas;
        private MetroFramework.Controls.MetroTile mtr_consultas;
        private MetroFramework.Controls.MetroLabel metroLabel2;
        private MetroFramework.Controls.MetroTile mtr_pets;
    }
}