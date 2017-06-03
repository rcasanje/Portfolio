<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class frmPrincipal
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.btnNovoJogo = New System.Windows.Forms.Button()
        Me.StatusStrip1 = New System.Windows.Forms.StatusStrip()
        Me.MenuStrip1 = New System.Windows.Forms.MenuStrip()
        Me.ArquivoToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.NovoJogoToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.ToolStripMenuItem1 = New System.Windows.Forms.ToolStripSeparator()
        Me.SairToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.EstatísticasToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.AbrirEstatísticasToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.AjudaToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.ComoJogarToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.CréditosToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.ToolStripMenuItem2 = New System.Windows.Forms.ToolStripSeparator()
        Me.Versão10ToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.txtJogador1 = New System.Windows.Forms.TextBox()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.txtJogador2 = New System.Windows.Forms.TextBox()
        Me.AbrirEstatísticasDosJogadoresToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.MenuStrip1.SuspendLayout()
        Me.SuspendLayout()
        '
        'btnNovoJogo
        '
        Me.btnNovoJogo.Enabled = False
        Me.btnNovoJogo.Location = New System.Drawing.Point(11, 126)
        Me.btnNovoJogo.Margin = New System.Windows.Forms.Padding(4)
        Me.btnNovoJogo.Name = "btnNovoJogo"
        Me.btnNovoJogo.Size = New System.Drawing.Size(274, 28)
        Me.btnNovoJogo.TabIndex = 0
        Me.btnNovoJogo.Text = "Novo Jogo"
        Me.btnNovoJogo.UseVisualStyleBackColor = True
        '
        'StatusStrip1
        '
        Me.StatusStrip1.ImageScalingSize = New System.Drawing.Size(20, 20)
        Me.StatusStrip1.Location = New System.Drawing.Point(0, 168)
        Me.StatusStrip1.Name = "StatusStrip1"
        Me.StatusStrip1.Padding = New System.Windows.Forms.Padding(1, 0, 19, 0)
        Me.StatusStrip1.Size = New System.Drawing.Size(298, 22)
        Me.StatusStrip1.TabIndex = 2
        Me.StatusStrip1.Text = "StatusStrip1"
        '
        'MenuStrip1
        '
        Me.MenuStrip1.ImageScalingSize = New System.Drawing.Size(20, 20)
        Me.MenuStrip1.Items.AddRange(New System.Windows.Forms.ToolStripItem() {Me.ArquivoToolStripMenuItem, Me.EstatísticasToolStripMenuItem, Me.AjudaToolStripMenuItem})
        Me.MenuStrip1.Location = New System.Drawing.Point(0, 0)
        Me.MenuStrip1.Name = "MenuStrip1"
        Me.MenuStrip1.Padding = New System.Windows.Forms.Padding(8, 2, 0, 2)
        Me.MenuStrip1.Size = New System.Drawing.Size(298, 28)
        Me.MenuStrip1.TabIndex = 3
        Me.MenuStrip1.Text = "MenuStrip1"
        '
        'ArquivoToolStripMenuItem
        '
        Me.ArquivoToolStripMenuItem.DropDownItems.AddRange(New System.Windows.Forms.ToolStripItem() {Me.NovoJogoToolStripMenuItem, Me.ToolStripMenuItem1, Me.SairToolStripMenuItem})
        Me.ArquivoToolStripMenuItem.Name = "ArquivoToolStripMenuItem"
        Me.ArquivoToolStripMenuItem.Size = New System.Drawing.Size(73, 24)
        Me.ArquivoToolStripMenuItem.Text = "Arquivo"
        '
        'NovoJogoToolStripMenuItem
        '
        Me.NovoJogoToolStripMenuItem.Name = "NovoJogoToolStripMenuItem"
        Me.NovoJogoToolStripMenuItem.Size = New System.Drawing.Size(155, 26)
        Me.NovoJogoToolStripMenuItem.Text = "Novo jogo"
        '
        'ToolStripMenuItem1
        '
        Me.ToolStripMenuItem1.Name = "ToolStripMenuItem1"
        Me.ToolStripMenuItem1.Size = New System.Drawing.Size(152, 6)
        '
        'SairToolStripMenuItem
        '
        Me.SairToolStripMenuItem.Name = "SairToolStripMenuItem"
        Me.SairToolStripMenuItem.Size = New System.Drawing.Size(155, 26)
        Me.SairToolStripMenuItem.Text = "Sair"
        '
        'EstatísticasToolStripMenuItem
        '
        Me.EstatísticasToolStripMenuItem.DropDownItems.AddRange(New System.Windows.Forms.ToolStripItem() {Me.AbrirEstatísticasToolStripMenuItem, Me.AbrirEstatísticasDosJogadoresToolStripMenuItem})
        Me.EstatísticasToolStripMenuItem.Name = "EstatísticasToolStripMenuItem"
        Me.EstatísticasToolStripMenuItem.Size = New System.Drawing.Size(93, 24)
        Me.EstatísticasToolStripMenuItem.Text = "Estatísticas"
        '
        'AbrirEstatísticasToolStripMenuItem
        '
        Me.AbrirEstatísticasToolStripMenuItem.Name = "AbrirEstatísticasToolStripMenuItem"
        Me.AbrirEstatísticasToolStripMenuItem.Size = New System.Drawing.Size(292, 26)
        Me.AbrirEstatísticasToolStripMenuItem.Text = "Abrir estatísticas do jogo"
        '
        'AjudaToolStripMenuItem
        '
        Me.AjudaToolStripMenuItem.DropDownItems.AddRange(New System.Windows.Forms.ToolStripItem() {Me.ComoJogarToolStripMenuItem, Me.CréditosToolStripMenuItem, Me.ToolStripMenuItem2, Me.Versão10ToolStripMenuItem})
        Me.AjudaToolStripMenuItem.Name = "AjudaToolStripMenuItem"
        Me.AjudaToolStripMenuItem.Size = New System.Drawing.Size(60, 24)
        Me.AjudaToolStripMenuItem.Text = "Ajuda"
        '
        'ComoJogarToolStripMenuItem
        '
        Me.ComoJogarToolStripMenuItem.Name = "ComoJogarToolStripMenuItem"
        Me.ComoJogarToolStripMenuItem.Size = New System.Drawing.Size(163, 26)
        Me.ComoJogarToolStripMenuItem.Text = "Como jogar"
        '
        'CréditosToolStripMenuItem
        '
        Me.CréditosToolStripMenuItem.Name = "CréditosToolStripMenuItem"
        Me.CréditosToolStripMenuItem.Size = New System.Drawing.Size(163, 26)
        Me.CréditosToolStripMenuItem.Text = "Créditos"
        '
        'ToolStripMenuItem2
        '
        Me.ToolStripMenuItem2.Name = "ToolStripMenuItem2"
        Me.ToolStripMenuItem2.Size = New System.Drawing.Size(160, 6)
        '
        'Versão10ToolStripMenuItem
        '
        Me.Versão10ToolStripMenuItem.Name = "Versão10ToolStripMenuItem"
        Me.Versão10ToolStripMenuItem.Size = New System.Drawing.Size(163, 26)
        Me.Versão10ToolStripMenuItem.Text = "Versão 1.0"
        '
        'txtJogador1
        '
        Me.txtJogador1.Location = New System.Drawing.Point(11, 48)
        Me.txtJogador1.Name = "txtJogador1"
        Me.txtJogador1.Size = New System.Drawing.Size(275, 22)
        Me.txtJogador1.TabIndex = 4
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(87, 28)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(113, 17)
        Me.Label1.TabIndex = 5
        Me.Label1.Text = "Nome Jogador 1"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(89, 77)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(113, 17)
        Me.Label2.TabIndex = 7
        Me.Label2.Text = "Nome Jogador 2"
        '
        'txtJogador2
        '
        Me.txtJogador2.Location = New System.Drawing.Point(11, 97)
        Me.txtJogador2.Name = "txtJogador2"
        Me.txtJogador2.Size = New System.Drawing.Size(275, 22)
        Me.txtJogador2.TabIndex = 6
        '
        'AbrirEstatísticasDosJogadoresToolStripMenuItem
        '
        Me.AbrirEstatísticasDosJogadoresToolStripMenuItem.Name = "AbrirEstatísticasDosJogadoresToolStripMenuItem"
        Me.AbrirEstatísticasDosJogadoresToolStripMenuItem.Size = New System.Drawing.Size(292, 26)
        Me.AbrirEstatísticasDosJogadoresToolStripMenuItem.Text = "Abrir estatísticas dos jogadores"
        '
        'frmPrincipal
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(8.0!, 16.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(298, 190)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.txtJogador2)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.txtJogador1)
        Me.Controls.Add(Me.MenuStrip1)
        Me.Controls.Add(Me.StatusStrip1)
        Me.Controls.Add(Me.btnNovoJogo)
        Me.Margin = New System.Windows.Forms.Padding(4)
        Me.Name = "frmPrincipal"
        Me.Text = "Jogo da Velha"
        Me.MenuStrip1.ResumeLayout(False)
        Me.MenuStrip1.PerformLayout()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents btnNovoJogo As System.Windows.Forms.Button
    Friend WithEvents StatusStrip1 As System.Windows.Forms.StatusStrip
    Friend WithEvents MenuStrip1 As MenuStrip
    Friend WithEvents ArquivoToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents NovoJogoToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents ToolStripMenuItem1 As ToolStripSeparator
    Friend WithEvents SairToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents EstatísticasToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents AbrirEstatísticasToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents AjudaToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents ComoJogarToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents CréditosToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents Versão10ToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents ToolStripMenuItem2 As ToolStripSeparator
    Friend WithEvents txtJogador1 As TextBox
    Friend WithEvents Label1 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents txtJogador2 As TextBox
    Friend WithEvents AbrirEstatísticasDosJogadoresToolStripMenuItem As ToolStripMenuItem
End Class
