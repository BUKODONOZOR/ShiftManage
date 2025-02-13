<style>
    .conteiner {
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    p{
        margin: 0;
    }

    .screen {
        width: 900px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 10px;
        border-bottom: 2px solid #ddd;
    }

    .turno-card {
        background: #fd0d0d;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        padding: 30px;
        border-radius: 5px;
        height: 100%;
    }
    .info {
        color: white;
        justify-content: center;
        text-align: center;
        padding: 8px 10px;
    }

    .turno-list .list-group-item {
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: space-between;
        align-items: center;
        font-size: 18px;
        padding: 10px 15px;
        border: none;
        background: #e9ecef;
    }

    .turno-list .list-group-item:nth-child(odd) {
        background: #c5c7c9;
    }

    .highlight_turno {
        background: #d4d1d1;
        color: black;
        padding: 5px 10px;
        border-radius: 5px 0 0 0;
        white-space: nowrap;
    }

    .highlight_module{
        background: #e4dfdf;
        color: black;
        padding: 5px 10px;
        border-radius: 0 5px 0 0;
        white-space: nowrap;
    }

    .highlight_name{
        background: #f10707;
        color: black;
        padding: 5px 10px;
        border-radius: 0 0 5px 5px;
        white-space: nowrap;
    }

</style>
<div class="container">
    <div class="screen">
        <div class="header">
            <h4>MI TURNO</h4>
            <div>
                <small>Logo de la entidad</small>
            </div>
            <div>
                <small>09:35 p.m. <br> 09 de octubre 2020</small>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="row mb-2">
                    <div class="col-md-6 info" style="background: #fd0d0d;">
                        <p>Turno</p>
                    </div>
                    <div class="col-md-6 info" style="background: #811818;">
                        <p>Modulo</p>
                    </div>
                </div>
                <ul class="list-group turno-list">
                    <li>
                        <div class="list-group-item"> 
                            <div class="row">
                                <p class="highlight_turno col-md-6">AGF 5</p> 
                                <p class="col-md-6 highlight_module ">08</p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="highlight_name" >Juan Perez</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item row"><p class="highlight_turno col-md-6">ODT 5</p> <p class="col-md-6 highlight_module ">04</p> </li>
                    <li class="list-group-item row"><p class="highlight_turno col-md-6">ODT 5</p> <p class="col-md-6 highlight_module ">04</p> </li>
                    <li class="list-group-item row"><p class="highlight_turno col-md-6">ODT 5</p> <p class="col-md-6 highlight_module ">04</p> </li>
                    <li class="list-group-item row"><p class="highlight_turno col-md-6">ODT 5</p> <p class="col-md-6 highlight_module ">04</p> </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="turno-card">
                    <h3>RTH 4</h3>
                    <h1>02</h1>
                    <p>Ruben Tabares</p>
                </div>
            </div>
        </div>

        <p class="mt-3 text-muted text-center"></p>
    </div>
</div>
