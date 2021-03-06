@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Quienes Somos</h1>

        <article>
          <h2 class="titulo">zooft</h2>
          <p>
            Zooft es un <strong>sistema de información a los visitantes y gestión de incidencias de un parque
              zoológico</strong>, el cual, brinda datos relevantes de cada un de los animales que se encuentran en el
            parque y, además, gestiona y da aviso a los empleados del zoológico de todas aquellas incidencias que son
            generadas por los visitantes del parque.
          </p>
          <p>
            Esta web de información y gestión, nació como proyecto de fin de grado de enseñanza de formación profesional
            para el ciclo formativo de grado superior en <strong>Desarrollo de Aplicaciones Web</strong>, impartido en el
            Instituto de Educación Secundaria <strong>Rosa Chacel</strong>.
          </p>
          <p>
            Este proyecto a sido ideado, planificado, desarrollado y puesto en marcha por <strong>Angello Torres De la
              torre</strong>, alumno del ciclo y centro anteriormente mencionados.
          </p>
        </article>

        <article>
          <div class="form">
            <a class="btn btn-enviar" href="{{ route('regresar') }}">Regresar</a>
          </div>
        </article>
      </div>

      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">About us</h1>

        <article>
          <h2 class="titulo">zooft</h2>
          <p>
            Zooft is a <strong>visitor information system and incident management of a zoo</strong>, which provides relevant data of each
            of the animals found in the park and, in addition, manages and gives notice to zoo employees. all those
            incidents that are generated by park visitors.
          </p>
          <p>
            This information and management website were born as an end-of-degree project of vocational training for the
            higher degree training cycle in <strong>Web Application Development</strong>, taught at the <strong>Rosa Chacel</strong> Secondary Education
            Institute.
          </p>
          <p>
            This project has been conceived, planned, developed and launched by <strong>Angello Torres De la
              Torre</strong>, student of the cycle and center mentioned above.
          </p>
        </article>

        <article>
          <div class="form">
            <a class="btn btn-enviar" href="{{ route('regresar') }}">Back</a>
          </div>
        </article>

      </div>
    </section>
  </div>

@endsection