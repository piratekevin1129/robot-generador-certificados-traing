
<style type="text/css">
    div#tabla{
        background-image: url(assets/background-3.png);
        /*background-repeat: no-repeat;*/
        background-color: #FFFFFF;
        width: 1053px;
        height: 812px;
    }    
    div.center{
        text-align: center;
    }
    /*div.right{
        text-align: right;
        border: #000 solid 1px;
    }*/
    img#logo{
        margin-top: 140px;
        display: block;
    }
    img#firma{
        margin-top: 5px;
        margin-bottom: 20px;
        display: block;
    }
    h1{
        font-family: ptsansnarrowbold;
        margin: 0px;
        padding: 0px;
        color: #404E67;
        font-size: 20px;
        text-align: center;
        margin-top: 30px;
        font-weight: normal;
    }
    h2{
        font-family: ptsansnarrow;
        margin: 0px;
        padding: 0px;
        color: #c1c1c1;
        font-size: 30px;
        text-align: center;
        margin-top: 30px;
        font-weight: normal;
    }
    p{
        font-family: ptsansnarrow;
        margin: 0px;
        padding: 0px;
        color: #404E67;
        font-size: 16px;
        text-align: center;
        margin-top: 2px;
    }
    h3{
        font-family: ptsansnarrow;
        margin: 0px;
        padding: 0px;
        color: #404E67;
        font-size: 20px;
        text-align: center;
        margin-top: 30px;
        font-weight: normal;
    }
    h6{
        font-family: ptsansnarrow;
        margin: 0px;
        padding: 0px;
        color: #404E67;
        font-size: 15px;
        text-align: center;
        margin-top: 1px;
        font-weight: normal;
    }
    div.codigo{
        display: block;
        font-family: ptsansnarrow;
        margin: 0px;
        padding: 0px;
        color: #404E67;
        font-size: 14px;
        margin-top: 0px;
        text-align: right;
        width: 910px;
        font-weight: normal;
    }
    
</style>
<page width="279" height="215">
    <div id="tabla">
        <div class="center">
            <img id="logo" src="assets/logo.png" />
        </div>
        <h1>Certificado de participación otorgado a:</h1>
        <h2><?php echo $nombre.' '.$apellido?></h2>
        <p>Nombres y apellidos</p>
        <h2><?php echo $documento?></h2>
        <p>Número de identificación</p>
        <h3>Completó con éxito el curso virtual</h3>
        <h2>INDUCCIÓN Y REINDUCCIÓN DEL SIG</h2>
        <div class="center">
            <img id="firma" src="assets/firma-2.jpg" />
        </div>
        <h6>Certifica</h6>
        <h6>Carlos Ariel Corredor Silva - Edith Atehortua Villa</h6>
        <h6>Gerente General - Directora S.I.G.</h6>
        <?php $ano_nuevo = date('Y')+1;?>
        <h6>Aprobado el <?php echo date('j/n/Y')?>. Valido hasta el <?php echo date('j/n/').$ano_nuevo?></h6>

        <div class="codigo"><?php echo 'U'.$id.'C538A23'?></div>
    </div>
</page>
