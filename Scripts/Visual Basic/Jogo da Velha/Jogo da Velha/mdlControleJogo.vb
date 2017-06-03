Imports System.IO
Imports System.Runtime.Serialization.Formatters.Binary

Module mdlControleJogo
    <Serializable()> Structure BDJogo
        Dim jogos, empates As Integer
        Dim tempo As Single
    End Structure
    Public jogos As ArrayList

    Public posicao(8) As Integer
    Sub salvarJogos()
        Dim arquivo As FileStream
        Dim bin As BinaryFormatter

        arquivo = New FileStream("Jogos.bin", FileMode.Create)
        bin = New BinaryFormatter()

        bin.Serialize(arquivo, jogos)

        bin = Nothing
        arquivo.Close()
    End Sub

    Sub carregarJogos()
        Dim arquivo As FileStream
        Dim bin As BinaryFormatter

        arquivo = New FileStream("Jogos.bin", FileMode.Open)
        bin = New BinaryFormatter()

        jogos = CType(bin.Deserialize(arquivo), ArrayList)

        bin = Nothing
        arquivo.Close()
    End Sub
End Module
