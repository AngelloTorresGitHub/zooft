@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
        <form method="POST" action="{{ route('makeIncidencia') }}">
            {{ csrf_field() }}
            {{-- Sección en Español --}}
            <div class="container-section esp" id="esp">
                <h1 class="titulo">Formulario de incidencias</h1>

                {{-- Selección de incidencia --}}
                <article>
                    <div class="form">
                        <label class="titulo esp" for="mainIncidenciaEsp">Seleccione</label>
                        <select name="mainIncidencia" id="mainIncidenciaEsp">
                            <option value="">Tipo de incidencia</option>
                            <option value="1">Basura/Suciedad</option>
                            <option value="2">Infraestructura Dañada/Defectuosa</option>
                            <option value="3">Animales</option>
                            <option value="4">Visitantes</option>
                        </select>
                    </div>
                </article>

                {{-- //////////////////////////////////// --}}
                {{-- Incidencia 1 --}}
                <article class="hidden incSubIncidencia1">
                    <div class="form">
                        <label class="titulo" for="subIncidenciaEsp">Basura/Suciedad</label>
                        <select name="subIncidencia" class="subIncidenciaEsp" id="subIncidenciaEsp">
                            <option value="">Descripción de la incidencia</option>
                            <option value="1">Papelera llena</option>
                            <option value="2">Basura en espacio público</option>
                            <option value="3">Desechos corporales</option>
                        </select>
                    </div>
                </article>

                {{-- //////////////////////////////////// --}}
                {{-- Incidencia 2 --}}
                <article class="hidden incSubIncidencia2">
                    <div class="form">
                        <label class="titulo" for="subIncidenciaEsp">Infraestructura Dañada/Defectuosa</label>
                        <select name="subIncidencia" class="subIncidenciaEsp" id="subIncidenciaEsp">
                            <option value="">Descripción de la incidencia</option>
                            <option value="4">Inmobiliario</option>
                            <option value="5">Cercas/Jaulas</option>
                            <option value="6">Iluminación</option>
                            <option value="7">Fuentes de agua</option>                            
                        </select>
                    </div>
                </article>

                {{-- //////////////////////////////////// --}}
                {{-- Incidencia 3 --}}
                <article class="hidden incSubIncidencia3">
                    <div class="form">
                        <label class="titulo" for="subIncidenciaEsp">Animales</label>
                        <select name="subIncidencia" class="subIncidenciaEsp" id="subIncidenciaEsp">
                            <option value="">Descripción de la incidencia</option>                            
                            <option value="8">Objeto extraño en recinto del animal</option>
                            <option value="9">Comportamiento extraño del animal</option>                            
                        </select>
                    </div>
                </article>

                {{-- //////////////////////////////////// --}}
                {{-- Incidencia 4 --}}
                <article class="hidden incSubIncidencia4">
                    <div class="form">
                        <label class="titulo" for="subIncidenciaEsp">Visitantes</label>
                        <select name="subIncidencia" class="subIncidenciaEsp" id="subIncidenciaEsp">
                            <option value="">Descripción de la incidencia</option>                            
                            <option value="10">Comportamiento incívico de visitante</option>
                            <option value="11">Atención sanitaria</option>                            
                        </select>
                    </div>
                </article>

                {{-- //////////////////////////////////////////////////////////////////////////////////////////// --}}
                {{-- Botón Enviar incidencia --}}
                <article class="btn-incidencia hidden">
                    <div class="form">
                        <button type="submit" name="btn-incidencia" class="btn btn-enviar btn-incidencia">Enviar</button>
                    </div>
                </article>

                {{-- //////////////////////////////////////////////////////////////////////////////////////////// --}}
                {{-- Botón Cancelar incidencia --}}
                <article>
                    <div class="form">
                        <a class="btn btn-cancelar" href="{{ route('regresar') }}">Cancelar</a>
                    </div>
                </article>
            </div>

            {{-- ////////////////////////////////////////////////////////////////////////////////////////// --}}
            {{-- ////////////////////////////////////////////////////////////////////////////////////////// --}}
            {{-- ////////////////////////////////////////////////////////////////////////////////////////// --}}

            {{-- Sección en Ingles --}}
            <div class="container-section eng" id="eng">
                <h1 class="titulo">Incident form</h1>

                {{-- Selección de incidencia --}}
                <article>
                    <div class="form">
                        <label class="titulo eng" for="mainIncidenciaEng">Select</label>
                        <select name="mainIncidencia" id="mainIncidenciaEng">
                            <option value="">Type of incidence</option>
                            <option value="1">Trash/Dirt</option>
                            <option value="2">Damaged/Defective Infrastructure</option>
                            <option value="3">Animals</option>
                            <option value="4">Visitors</option>
                        </select>
                    </div>
                </article>

                {{-- //////////////////////////////////// --}}
                {{-- Incidencia 1 --}}
                <article class="hidden incSubIncidencia1">
                    <div class="form">
                        <label class="titulo eng" for="subIncidenciaEng">Trash/Dirt</label>
                        <select name="subIncidencia" class="subIncidenciaEng" id="subIncidenciaEng">
                            <option value="">Description of the incident</option>
                            <option value="1">Bin full</option>
                            <option value="2">Garbage in public space</option>
                            <option value="3">Bodily waste</option>
                        </select>
                    </div>
                </article>

                {{-- //////////////////////////////////// --}}
                {{-- Incidencia 2 --}}
                <article class="hidden incSubIncidencia2">
                    <div class="form">
                        <label class="titulo" for="subIncidenciaEng">Damaged/Defective Infrastructure</label>
                        <select name="subIncidencia" class="subIncidenciaEng" id="subIncidenciaEng">
                            <option value="">Description of the incident</option>                            
                            <option value="4">Real estate</option>
                            <option value="5">Fences/Cages</option>
                            <option value="6">Illumination</option>
                            <option value="7">Water sources</option>
                        </select>
                    </div>
                </article>

                {{-- //////////////////////////////////// --}}
                {{-- Incidencia 3 --}}
                <article class="hidden incSubIncidencia3">
                    <div class="form">
                        <label class="titulo" for="subIncidenciaEng">Animals</label>
                        <select name="subIncidencia" class="subIncidenciaEng" id="subIncidenciaEng">
                            <option value="">Description of the incident</option>
                            <option value="8">Foreign object in the animal's enclosure</option>
                            <option value="9">Strange behavior of the animal</option>
                        </select>
                    </div>
                </article>

                {{-- //////////////////////////////////// --}}
                {{-- Incidencia 4 --}}
                <article class="hidden incSubIncidencia4">
                    <div class="form">
                        <label class="titulo" for="subIncidenciaEng">Visitors</label>
                        <select name="subIncidencia" class="subIncidenciaEng" id="subIncidenciaEng">
                            <option value="">Description of the incident</option>
                            <option value="10">Uncivil visitor behavior</option>
                            <option value="11">Health care</option>                            
                        </select>
                    </div>
                </article>

                {{-- //////////////////////////////////////////////////////////////////////////////////////////// --}}
                {{-- Botón Enviar incidencia --}}
                <article class="btn-incidencia hidden">
                    <div class="form">                        
                        <button type="submit" name="btn-incidencia" class="btn btn-enviar btn-incidencia">Send</button>
                    </div>
                </article>

                {{-- //////////////////////////////////////////////////////////////////////////////////////////// --}}
                {{-- Botón Cancelar incidencia --}}
                <article>
                    <div class="form">
                        <a class="btn btn-cancelar" href="{{ route('regresar') }}">Cancel</a>
                    </div>
                </article>
            </div>
        </form>
    </section>
</div>

@endsection