Imports System.IO
Imports System.Runtime.Serialization.Formatters.Binary

Module mdlEstatísticas
    Public jogador1, jogador2 As String
    Dim jogador As BDplayer
    Dim i As Integer

    <Serializable()> Structure BDplayer
        Dim nome As String
        Dim vitorias, derrotas, empates As Integer
        Dim tempo As Single
    End Structure

    Public players As New ArrayList

    Public Sub salvarStats()
        Dim arquivo As FileStream
        Dim bin As BinaryFormatter

        arquivo = New FileStream("Players.bin", FileMode.Create)
        bin = New BinaryFormatter()

        bin.Serialize(arquivo, players)

        bin = Nothing
        arquivo.Close()
    End Sub

    Public Sub carregarStats()
        Dim arquivo As FileStream
        Dim bin As BinaryFormatter

        arquivo = New FileStream("Players.bin", FileMode.Open)
        bin = New BinaryFormatter()

        players = CType(bin.Deserialize(arquivo), ArrayList)

        bin = Nothing
        arquivo.Close()
    End Sub
    Public Sub adicionarJogador()

        If players.Count > 0 Then
            'Do
            ' jogador = CType(players.Item(i), BDplayer)
            ' i += 1
            ' Loop Until (jogador1 = jogador.nome) Or (i >= players.Count - 1)
            ' Do
            ' jogador = CType(players.Item(i), BDplayer)
            ' i += 1
            'Loop Until (jogador2 = jogador.nome) Or (i >= players.Count - 1)
        Else
            jogador.nome = jogador1
            players.Add(jogador)
            jogador.nome = jogador2
            players.Add(jogador)
        End If
    End Sub

    Public Sub playerGanhador(ByVal ganhador As Integer)
        i = -1
        If ganhador = 1 Then
            Do
                i += 1
                jogador = CType(players.Item(i), BDplayer)
            Loop Until (jogador1 = jogador.nome) Or (i >= players.Count - 1)
            jogador = CType(players.Item(i), BDplayer)
            jogador.vitorias += 1
        ElseIf ganhador = 2 Then
            Do
                i += 1
                jogador = CType(players.Item(i), BDplayer)
            Loop Until (jogador2 = jogador.nome) Or (i >= players.Count - 1)
            jogador = CType(players.Item(i), BDplayer)
            jogador.vitorias += 1
        End If
    End Sub

    Public Sub playerPerdedor(ByVal perdedor As Integer)
        i = -1
        If perdedor = 1 Then
            Do
                i += 1
                jogador = CType(players.Item(i), BDplayer)
            Loop Until (jogador1 = jogador.nome) Or (i >= players.Count - 1)
            jogador = CType(players.Item(i), BDplayer)
            jogador.derrotas += 1
        ElseIf perdedor = 2 Then
            Do
                i += 1
                jogador = CType(players.Item(i), BDplayer)
            Loop Until (jogador2 = jogador.nome) Or (i >= players.Count - 1)
            jogador = CType(players.Item(i), BDplayer)
            jogador.derrotas += 1
        End If
    End Sub

    Public Sub playerEmpatado()
        i = -1
        Do
            i += 1
            jogador = CType(players.Item(i), BDplayer)
        Loop Until (jogador1 = jogador.nome) Or (i >= players.Count - 1)
        jogador = CType(players.Item(i), BDplayer)
        jogador.empates += 1
        i = -1
        Do
            i += 1
            jogador = CType(players.Item(i), BDplayer)
        Loop Until (jogador1 = jogador.nome) Or (i >= players.Count - 1)
        jogador = CType(players.Item(i), BDplayer)
        jogador.empates += 1
    End Sub
End Module
