Public Class frmJogo
    Dim jogadorVez, fimdeJogo As Boolean
    Dim jogadas, win1, win2, win3 As Integer

    Private Sub loadGame(sender As Object, e As EventArgs) Handles MyBase.Load
        zerarJogo()
        jogadorVez = False
        tslStatus.Text = String.Format("Vez do {0}", jogador1)

        lblPlacar1.Text = String.Format("{0}: {1}", jogador1, win1)
        lblPlacar2.Text = String.Format("{0}: {1}", jogador2, win2)
        lblPlacar3.Text = String.Format("Empatou: {0}", win3)
    End Sub

    Private Sub buttonClick(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnArea1.Click, btnArea9.Click, btnArea8.Click, btnArea7.Click, btnArea6.Click, btnArea5.Click, btnArea4.Click, btnArea3.Click, btnArea2.Click
        Dim btn As Button
        Dim btnTag, btnName As String

        btnTag = CStr(sender.tag)
        btnName = CStr(sender.name)
        btn = sender

        If posicao(btnTag) = 0 And fimdeJogo = False Then
            If jogadorVez = False Then
                btn.Image = Image.FromFile("Images/Xis.png")
                tslStatus.Text = String.Format("Vez do {0}", jogador2)
                jogadorVez = True
                posicao(btnTag) = 1
            Else
                btn.Image = Image.FromFile("Images/Bola.png")
                tslStatus.Text = String.Format("Vez do {0}", jogador1)
                jogadorVez = False
                posicao(btnTag) = 2
            End If
            jogadas += 1
        End If

        If (posicao(0) = 1) And (posicao(1) = 1) And (posicao(2) = 1) Or (posicao(3) = 1) And (posicao(4) = 1) And (posicao(5) = 1) Or (posicao(6) = 1) And (posicao(7) = 1) And (posicao(8) = 1) Or (posicao(0) = 1) And (posicao(3) = 1) And (posicao(6) = 1) Or (posicao(1) = 1) And (posicao(4) = 1) And (posicao(7) = 1) Or (posicao(2) = 1) And (posicao(5) = 1) And (posicao(8) = 1) Or (posicao(0) = 1) And (posicao(4) = 1) And (posicao(8) = 1) Or (posicao(2) = 1) And (posicao(4) = 1) And (posicao(6) = 1) Then
            playerGanhador(1)
            playerPerdedor(2)
            win1 += 1
            finalizarJogo(1)
        ElseIf (posicao(0) = 2) And (posicao(1) = 2) And (posicao(2) = 2) Or (posicao(3) = 2) And (posicao(4) = 2) And (posicao(5) = 2) Or (posicao(6) = 2) And (posicao(7) = 2) And (posicao(8) = 2) Or (posicao(0) = 2) And (posicao(3) = 2) And (posicao(6) = 2) Or (posicao(1) = 2) And (posicao(4) = 2) And (posicao(7) = 2) Or (posicao(2) = 2) And (posicao(5) = 2) And (posicao(8) = 2) Or (posicao(0) = 2) And (posicao(4) = 2) And (posicao(8) = 2) Or (posicao(2) = 2) And (posicao(4) = 2) And (posicao(6) = 2) Then
            playerGanhador(2)
            playerPerdedor(1)
            win2 += 1
            finalizarJogo(2)
        ElseIf (jogadas = 9) Then
            playerEmpatado()
            win3 += 1
            finalizarJogo(3)
        End If
    End Sub

    Private Sub finalizarJogo(ByVal jogador As Integer)
        Dim opcao As MsgBoxResult
        Select Case (jogador)
            Case 1
                opcao = MsgBox("Jogar novamente ?", vbYesNo, "X Ganhou")
            Case 2
                opcao = MsgBox("Jogar novamente ?", vbYesNo, "O Ganhou")
            Case 3
                opcao = MsgBox("Jogar novamente ?", vbYesNo, "Empatou")
        End Select
        salvarStats()
        If opcao = vbYes Then
            zerarJogo()
        Else
            Me.Close()
        End If
    End Sub

    Private Sub zerarJogo()
        btnArea1.Image = Nothing
        btnArea2.Image = Nothing
        btnArea3.Image = Nothing
        btnArea4.Image = Nothing
        btnArea5.Image = Nothing
        btnArea6.Image = Nothing
        btnArea7.Image = Nothing
        btnArea8.Image = Nothing
        btnArea9.Image = Nothing
        For i = 0 To 8 Step 1
            posicao(i) = 0
        Next
        jogadas = 0
        lblPlacar1.Text = String.Format("{0}: {1}", jogador1, win1)
        lblPlacar2.Text = String.Format("{0}: {1}", jogador2, win2)
        lblPlacar3.Text = String.Format("Empatou: {0}", win3)
    End Sub
End Class