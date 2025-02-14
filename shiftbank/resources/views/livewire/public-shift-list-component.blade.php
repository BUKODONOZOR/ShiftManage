<style>
    body {
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        margin: 0;
    }

    .screen {
        max-width: 1920px;
        max-height: 1080px;
        width: 90vw;
        height: 90vh;
        background: white;
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        padding: 2vh;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 10px;
        border-bottom: 2px solid #ddd;
        font-size: 2vw;
    }

    .header small {
        font-size: 1.5vw;
    }

    .content {
        flex: 1;
        display: flex;
        gap: 2vw;
        margin-top: 2vh;
        overflow: hidden;
    }

    .turno-list-container {
        flex: 1;
        display: flex;
        flex-direction: column;
        height: 100%;
        overflow: hidden;
    }

    .turno-list {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between; 
    }

    .turno-header {
        display: flex;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 10px;
        font-size: 2vw;
        font-weight: bold;
        text-align: center;
    }

    .turno-header div {
        flex: 1;
        padding: 1vh;
        color: white;
    }

    .turno-title {
        background-color: #F44336;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .modulo-title {
        background-color: #343a40;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .list-group-item {
        font-size: 2vw;
        padding: 1vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: calc(100% / 5);
        border: 1px solid #ddd;
        border-radius: 10px; 
        background-color: #f9f9f9;
        overflow: hidden;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .turno-info {
        display: flex;
        height: 50%;
        border-bottom: 2px solid #ddd;
    }

    .highlight_turno {
        width: 50%;
        background: #d4d1d1;
        color: black;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2vw;
        font-weight: bold;
        padding: 1vh;
        border-top-left-radius: 10px;
    }

    .highlight_module {
        width: 50%;
        background: #e4dfdf;
        color: black;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2vw;
        font-weight: bold;
        padding: 1vh;
        border-top-right-radius: 10px;
    }

    .highlight_name {
        width: 100%;
        background: #F44336;
        color: white;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2vw;
        font-weight: bold;
        height: 50%;
        padding: 1vh;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .turno-card-container {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .turno-card {
        background: #F44336;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 3vh;
        border-radius: 10px;
        width: 100%;
        height: 100%;
        font-size: 3vw;
    }
</style>

<div class="container screen">
    <div class="header">
        <h4>MI TURNO</h4>
        <div>
            <small>Logo de la entidad</small>
        </div>
        <div>
            <small>{{ now()->format('h:i A') }} <br> {{ now()->format('d \d\e F Y') }}</small>
        </div>
    </div>

    <div class="content">

        <div class="turno-list-container">
            <div class="turno-header">
                <div class="turno-title">Turno</div>
                <div class="modulo-title">Módulo</div>
            </div>

            <ul class="list-group turno-list">
                @foreach ($turnosEnProceso as $turno)
                    <li class="list-group-item">
                        <div class="turno-info">
                            <div class="highlight_turno">{{ $turno->number }}</div>
                            <div class="highlight_module">{{ $turno->random_module }}</div>
                        </div>
                        <div class="highlight_name">{{ $turno->name }}</div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="turno-card-container">
            @if ($turnoActual)
                <div class="turno-card">
                    <h3>{{ $turnoActual->number }}</h3>
                    <h1>{{ $turnoActual->random_module }}</h1>
                    <p>{{ $turnoActual->name }}</p>
                </div>
            @else
                <div class="turno-card">
                    <h3>Sin turno en proceso</h3>
                </div>
            @endif
        </div>
    </div>
</div>
