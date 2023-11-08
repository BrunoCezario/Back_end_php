<html>
<head>
    <title>Converter uma Tabela para PDF usando JavaScript</title>
    <style>
        table
        {
            width: 300px;
            font: 17px Calibri;
        }
        table, th, td 
        {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="tabela">
        <table> 
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Cargo</th>
            </tr>
            <tr>
                <td>Bruno</td>
                <td>55</td>
                <td>Programador</td>
            </tr>
            <tr>
                <td>Jefferson</td>
                <td>26</td>
                <td>Engenheiro</td>
            </tr>
            <tr>
                <td>Janice</td>
                <td>24</td>
                <td>Web Designer</td>
            </tr>
        </table>
    </div>
    <p>
        <input type="button" value="Criar PDF" id="btnImprimir" onclick="CriaPDF()" />
    </p>
</body>
<script>
    function CriaPDF() {
        var tabela_aLunos = document.getElementById('tabela').innerHTML;
        var style = "<style>";
        style = style + "table {width: 100%;font: 20px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";
        // CRIA UM OBJETO WINDOW
        var win = window.open('', '', 'height=700,width=700');
        win.document.write('<html><head>');
        win.document.write('<title>Alunos</title>');   // <title> CABEÇALHO DO PDF.
        win.document.write(style);                                     // INCLUI UM ESTILO NA TAB HEAD
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(tabela_aLunos);                          // O CONTEUDO DA TABELA DENTRO DA TAG BODY
        win.document.write('</body></html>');
        win.document.close(); 	                                         // FECHA A JANELA
        win.print();                                                            // IMPRIME O CONTEUDO
    }
</script>
</html>