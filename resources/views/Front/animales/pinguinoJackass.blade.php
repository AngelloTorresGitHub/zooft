@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Pingüino de Jackass</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/pinguinoJackass.jpg') }}" alt="Pingüino de Jackass" title="Pingüino de Jackass">
        </div>

        <article>
          <h2 class="titulo linea">¿Quién es?</h2>

          <p>Conocido como <strong>pingüino africano</strong>, el Pingüino de Jackass habita en las <strong>costas rocosas
              del extremo sur en África</strong> (Namibia, Sudáfrica e islas circundantes). Presenta una
            <strong>apariencia que le camufla de sus depredadores</strong> (en especial las manchas negras en el pecho y
            las líneas blancas y negras sobre la cabeza, que le han valido el apodo de &quot;pingüino anillado&quot;).
            Gran nadador, es capaz de alcanzar los 10 km/h, e incluso de permanecer hasta dos minutos debajo del agua.</p>
        </article>

        <article>
          <h2 class="titulo linea">¿Cuáles son sus costumbres?</h2>

          <p>El Pingüino de Jackass vive en <strong>colonias formadas por numerosas parejas</strong>, alimentándose para
            sobrevivir con pequeños peces y crustáceos. A la hora de reproducirse, se dedica a excavar nidos en los suelos
            arenosos y a incubar después los huevos entre 35 y 40 días. Suele poner dos ejemplares.</p>
        </article>

        <article>
          <h2 class="titulo linea">Sabías que…</h2>
          <p>A nivel social, este pingüino utiliza cierto <strong>lenguaje vocal</strong> para realizar llamadas, bien
            para marcar territorio o para llamar la atención de sus parejas y comunicarse con sus crías.</p>
        </article>
      </div>
      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">Jackass Penguin</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/pinguinoJackass.jpg') }}" alt="Jackass Penguin" title="Jackass Penguin">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>Known as the <strong>African penguin</strong>, the Jackass penguin inhabits the <strong>rocky coasts of the
              extreme south of Africa</strong> (Namibia, South Africa and surrounding islands). It has an
            <strong>appearance that camouflages it from its predators</strong> (especially the black patches on its chest
            and the black-and-white lines on its head, which have earned it the nickname of &quot;ringed penguin&quot;). A
            great swimmer, it's capable of reaching 10 km/h and even of remaining under the water for two minutes.</p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p>The Jackass penguin lives in <strong>colonies made up of numerous pairs</strong>, which to survive feed on
            small fish and crustaceans. When reproducing, it spends its time digging nests in the sandy ground and, later,
            incubating the eggs for between 35 and 40 days. It usually lays two eggs.</p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>Socially, this penguin uses a certain <strong>vocal language</strong> to make calls, either to mark territory
            or to call to their mates and communicate with their chicks.</p>
        </article>
      </div>
    </section>
  </div>

@endsection