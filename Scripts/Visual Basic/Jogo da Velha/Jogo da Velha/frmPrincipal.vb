Public Class frmPrincipal
    Dim j1, j2 As String

    Private Sub frmPrincipal_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        salvarStats()
        carregarStats()
    End Sub

    Private Sub tamanhoTexto(sender As Object, e As EventArgs) Handles txtJogador1.TextChanged, txtJogador2.TextChanged
        j1 = txtJogador1.Text
        j2 = txtJogador2.Text

        If (j1.Length < 4) Or (j2.Length < 4) Then
            btnNovoJogo.Enabled = False
        Else
            btnNovoJogo.Enabled = True
        End If
    End Sub

    Private Sub iniciarJogo(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnNovoJogo.Click
        jogador1 = j1
        jogador2 = j2
        adicionarJogador()
        frmJogo.ShowDialog()
    End Sub
End Class
