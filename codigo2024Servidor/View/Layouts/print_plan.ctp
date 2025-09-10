<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php echo $this->Html->charset(); ?>
        <title>Actividad Ciudad Bienestar</title>

        <style type="text/css">

            tr { color: black; font-family: sans-serif; font-size:14px; }
            td { color: black; font-family: sans-serif; font-size:14px; }
            table{margin-left: 20px; width:90%; height: auto;}
            textarea{margin: 0px; width: 100%; height: 600px;font-family: sans-serif; font-size:14px;}

            body {   margin: 0;   padding: 0;  }
        </style>
        <?php
        echo $this->Html->css(array('bootstrap.min.css', 'bootstrap-theme.css'));
        echo $this->Html->script(array('jquery.min', 'bootstrap.min', 'docs.min', 'ie10-viewport-bug-workaround'));

        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

    </head>

    <body>
        <table>
            <tr>
                <td </br><a href="../nuebus" ><img src="../../img/home-icon.png" width="20" height="20" > Planes</a>  <a href="javascript:imprimir();" target="_blank"><img src="../../img/print.png" width="20" height="20" > Imprimir</a>
                    <a class="copi" href="javascript:getlink();">Copiar URL</a></td>
            </tr>
        </table>

        <div id="vista">
            </br><strong><img src="../../img/actividad_ps_encabezado.jpg" style ="width: 93%;" /></strong></br>

            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>

           <table>
                <tr>
                    <td style="font-style: inherit;font-family: serif;">
                        <?php
                        $usr = $this->Session->read("usr");
                        if (isset($usr)) {
                            echo __('Sesion: ');
                            echo $usr . "<br/>";
                        }
                        ?>
                    </td >
                </tr>
            </table> 
        </div>
    </body>

</html>



<script>
    function getlink() {
        var aux = document.createElement("input");
        aux.setAttribute("value", window.location.href);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
    }

    function imprimir(idDiv) {
        var ficha = document.getElementById(idDiv);
        var ventimp = window.open(' ', 'popimpr');
        ventimp.document.write(ficha.innerHTML);
        ventimp.document.close();
        ventimp.print();
        ventimp.close();
    }
</script>



