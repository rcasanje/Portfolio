<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class frmJogo
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()>
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
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Me.btnArea1 = New System.Windows.Forms.Button()
        Me.btnArea2 = New System.Windows.Forms.Button()
        Me.btnArea3 = New System.Windows.Forms.Button()
        Me.btnArea4 = New System.Windows.Forms.Button()
        Me.btnArea5 = New System.Windows.Forms.Button()
        Me.btnArea6 = New System.Windows.Forms.Button()
        Me.btnArea7 = New System.Windows.Forms.Button()
        Me.btnArea8 = New System.Windows.Forms.Button()
        Me.btnArea9 = New System.Windows.Forms.Button()
        Me.MenuStrip1 = New System.Windows.Forms.MenuStrip()
        Me.StatusStrip1 = New System.Windows.Forms.StatusStrip()
        Me.btnDesistir = New System.Windows.Forms.Button()
        Me.lblPlacar1 = New System.Windows.Forms.Label()
        Me.lblPlacar2 = New System.Windows.Forms.Label()
        Me.lblPlacar3 = New System.Windows.Forms.Label()
        Me.tslStatus = New System.Windows.Forms.ToolStripStatusLabel()
        Me.StatusStrip1.SuspendLayout()
        Me.SuspendLayout()
        '
        'btnArea1
        '
        Me.btnArea1.Location = New System.Drawing.Point(16, 33)
        Me.btnArea1.Margin = New System.Windows.Forms.Padding(4)
        Me.btnArea1.Name = "btnArea1"
        Me.btnArea1.Size = New System.Drawing.Size(67, 62)
        Me.btnArea1.TabIndex = 0
        Me.btnArea1.Tag = "0"
        Me.btnArea1.UseVisualStyleBackColor = True
        '
        'btnArea2
        '
        Me.btnArea2.Location = New System.Drawing.Point(91, 33)
        Me.btnArea2.Margin = New System.Windows.Forms.Padding(4)
        Me.btnArea2.Name = "btnArea2"
        Me.btnArea2.Size = New System.Drawing.Size(67, 62)
        Me.btnArea2.TabIndex = 0
        Me.btnArea2.Tag = "1"
        Me.btnArea2.UseVisualStyleBackColor = True
        '
        'btnArea3
        '
        Me.btnArea3.Location = New System.Drawing.Point(165, 33)
        Me.btnArea3.Margin = New System.Windows.Forms.Padding(4)
        Me.btnArea3.Name = "btnArea3"
        Me.btnArea3.Size = New System.Drawing.Size(67, 62)
        Me.btnArea3.TabIndex = 0
        Me.btnArea3.Tag = "2"
        Me.btnArea3.UseVisualStyleBackColor = True
        '
        'btnArea4
        '
        Me.btnArea4.Location = New System.Drawing.Point(16, 102)
        Me.btnArea4.Margin = New System.Windows.Forms.Padding(4)
        Me.btnArea4.Name = "btnArea4"
        Me.btnArea4.Size = New System.Drawing.Size(67, 62)
        Me.btnArea4.TabIndex = 0
        Me.btnArea4.Tag = "3"
        Me.btnArea4.UseVisualStyleBackColor = True
        '
        'btnArea5
        '
        Me.btnArea5.Location = New System.Drawing.Point(91, 102)
        Me.btnArea5.Margin = New System.Windows.Forms.Padding(4)
        Me.btnArea5.Name = "btnArea5"
        Me.btnArea5.Size = New System.Drawing.Size(67, 62)
        Me.btnArea5.TabIndex = 0
        Me.btnArea5.Tag = "4"
        Me.btnArea5.UseVisualStyleBackColor = True
        '
        'btnArea6
        '
        Me.btnArea6.Location = New System.Drawing.Point(165, 102)
        Me.btnArea6.Margin = New System.Windows.Forms.Padding(4)
        Me.btnArea6.Name = "btnArea6"
        Me.btnArea6.Size = New System.Drawing.Size(67, 62)
        Me.btnArea6.TabIndex = 0
        Me.btnArea6.Tag = "5"
        Me.btnArea6.UseVisualStyleBackColor = True
        '
        'btnArea7
        '
        Me.btnArea7.Location = New System.Drawing.Point(16, 171)
        Me.btnArea7.Margin = New System.Windows.Forms.Padding(4)
        Me.btnArea7.Name = "btnArea7"
        Me.btnArea7.Size = New System.Drawing.Size(67, 62)
        Me.btnArea7.TabIndex = 0
        Me.btnArea7.Tag = "6"
        Me.btnArea7.UseVisualStyleBackColor = True
        '
        'btnArea8
        '
        Me.btnArea8.Location = New System.Drawing.Point(91, 171)
        Me.btnArea8.Margin = New System.Windows.Forms.Padding(4)
        Me.btnArea8.Name = "btnArea8"
        Me.btnArea8.Size = New System.Drawing.Size(67, 62)
        Me.btnArea8.TabIndex = 0
        Me.btnArea8.Tag = "7"
        Me.btnArea8.UseVisualStyleBackColor = True
        '
        'btnArea9
        '
        Me.btnArea9.Location = New System.Drawing.Point(165, 171)
        Me.btnArea9.Margin = New System.Windows.Forms.Padding(4)
        Me.btnArea9.Name = "btnArea9"
        Me.btnArea9.Size = New System.Drawing.Size(67, 62)
        Me.btnArea9.TabIndex = 0
        Me.btnArea9.Tag = "8"
        Me.btnArea9.UseVisualStyleBackColor = True
        '
        'MenuStrip1
        '
        Me.MenuStrip1.ImageScalingSize = New System.Drawing.Size(20, 20)
        Me.MenuStrip1.Location = New System.Drawing.Point(0, 0)
        Me.MenuStrip1.Name = "MenuStrip1"
        Me.MenuStrip1.Padding = New System.Windows.Forms.Padding(8, 2, 0, 2)
        Me.MenuStrip1.Size = New System.Drawing.Size(426, 24)
        Me.MenuStrip1.TabIndex = 1
        Me.MenuStrip1.Text = "MenuStrip1"
        '
        'StatusStrip1
        '
        Me.StatusStrip1.ImageScalingSize = New System.Drawing.Size(20, 20)
        Me.StatusStrip1.Items.AddRange(New System.Windows.Forms.ToolStripItem() {Me.tslStatus})
        Me.StatusStrip1.Location = New System.Drawing.Point(0, 247)
        Me.StatusStrip1.Name = "StatusStrip1"
        Me.StatusStrip1.Padding = New System.Windows.Forms.Padding(1, 0, 19, 0)
        Me.StatusStrip1.Size = New System.Drawing.Size(426, 25)
        Me.StatusStrip1.TabIndex = 2
        Me.StatusStrip1.Text = "StatusStrip1"
        '
        'btnDesistir
        '
        Me.btnDesistir.Location = New System.Drawing.Point(243, 210)
        Me.btnDesistir.Name = "btnDesistir"
        Me.btnDesistir.Size = New System.Drawing.Size(171, 23)
        Me.btnDesistir.TabIndex = 4
        Me.btnDesistir.Text = "Desistir"
        Me.btnDesistir.UseVisualStyleBackColor = True
        '
        'lblPlacar1
        '
        Me.lblPlacar1.AutoSize = True
        Me.lblPlacar1.Location = New System.Drawing.Point(243, 77)
        Me.lblPlacar1.Name = "lblPlacar1"
        Me.lblPlacar1.Size = New System.Drawing.Size(117, 17)
        Me.lblPlacar1.TabIndex = 5
        Me.lblPlacar1.Text = "<JOGADOR>: 00"
        '
        'lblPlacar2
        '
        Me.lblPlacar2.AutoSize = True
        Me.lblPlacar2.Location = New System.Drawing.Point(243, 102)
        Me.lblPlacar2.Name = "lblPlacar2"
        Me.lblPlacar2.Size = New System.Drawing.Size(113, 17)
        Me.lblPlacar2.TabIndex = 6
        Me.lblPlacar2.Text = "<JOGADOR>:00"
        '
        'lblPlacar3
        '
        Me.lblPlacar3.AutoSize = True
        Me.lblPlacar3.Location = New System.Drawing.Point(246, 123)
        Me.lblPlacar3.Name = "lblPlacar3"
        Me.lblPlacar3.Size = New System.Drawing.Size(88, 17)
        Me.lblPlacar3.TabIndex = 7
        Me.lblPlacar3.Text = "Empatou: 00"
        '
        'tslStatus
        '
        Me.tslStatus.Name = "tslStatus"
        Me.tslStatus.Size = New System.Drawing.Size(154, 20)
        Me.tslStatus.Text = "ToolStripStatusLabel1"
        '
        'frmJogo
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(8.0!, 16.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(426, 272)
        Me.Controls.Add(Me.lblPlacar3)
        Me.Controls.Add(Me.lblPlacar2)
        Me.Controls.Add(Me.lblPlacar1)
        Me.Controls.Add(Me.btnDesistir)
        Me.Controls.Add(Me.StatusStrip1)
        Me.Controls.Add(Me.btnArea9)
        Me.Controls.Add(Me.btnArea6)
        Me.Controls.Add(Me.btnArea3)
        Me.Controls.Add(Me.btnArea8)
        Me.Controls.Add(Me.btnArea5)
        Me.Controls.Add(Me.btnArea2)
        Me.Controls.Add(Me.btnArea7)
        Me.Controls.Add(Me.btnArea4)
        Me.Controls.Add(Me.btnArea1)
        Me.Controls.Add(Me.MenuStrip1)
        Me.MainMenuStrip = Me.MenuStrip1
        Me.Margin = New System.Windows.Forms.Padding(4)
        Me.Name = "frmJogo"
        Me.Text = "frmJogo"
        Me.StatusStrip1.ResumeLayout(False)
        Me.StatusStrip1.PerformLayout()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents btnArea1 As System.Windows.Forms.Button
    Friend WithEvents btnArea2 As System.Windows.Forms.Button
    Friend WithEvents btnArea3 As System.Windows.Forms.Button
    Friend WithEvents btnArea4 As System.Windows.Forms.Button
    Friend WithEvents btnArea5 As System.Windows.Forms.Button
    Friend WithEvents btnArea6 As System.Windows.Forms.Button
    Friend WithEvents btnArea7 As System.Windows.Forms.Button
    Friend WithEvents btnArea8 As System.Windows.Forms.Button
    Friend WithEvents btnArea9 As System.Windows.Forms.Button
    Friend WithEvents MenuStrip1 As System.Windows.Forms.MenuStrip
    Friend WithEvents StatusStrip1 As System.Windows.Forms.StatusStrip
    Friend WithEvents btnDesistir As Button
    Friend WithEvents lblPlacar1 As Label
    Friend WithEvents lblPlacar2 As Label
    Friend WithEvents lblPlacar3 As Label
    Friend WithEvents tslStatus As ToolStripStatusLabel
End Class
