@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Tiburón Toro</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/tiburonToro.jpg') }}" alt="Tiburón Toro" title="Tiburón Toro">
        </div>

        <article>
          <h2 class="titulo linea">¿Quién es?</h2>

          <p>Como el resto de escualos, carece de vejiga natatoria, pero es el único tiburón conocido capaz de tragar aire
            y llenar así su estómago a modo de órgano hidrostático. Su pavorosa boca, de gran tamaño y arqueada, muestra
            dientes afilados y dispuestos en más de una fila funcional que emplea para capturar presas de pequeño tamaño
            (peces, calamares, tiburones y rayas e invertebrados como cangrejos y langostas) que traga enteros, de ahí que
            sus dientes se asemajen a un simple clavo.</p>
          <p>Su distribución es circumtropical por el <strong>Atlántico y Mediterráneo, Mar Rojo, Índico y
              Pacífico</strong> (es decir, prácticamente por todo el mundo).</p>
        </article>

        <article>
          <h2 class="titulo linea">¿Cuáles son sus costumbres?</h2>

          <p>Les encanta planear enfrentándose a corrientes, usando estas para mantenerse estáticos a medias aguas. Son de
            <strong>movimientos lentos</strong>movimientos lentos y pausados, nadando siempre con un rumbo fijo, que
            alteran raramente, lo que emplean para cazar, pues se acercan a bancos de peces o calamares sin llamar su
            atención y cuando están próximos, con un movimiento de cabeza explosivo, capturan a los animales más
            confiados.</p>
          <p>Las hembras de tiburón toro, paren tan solo <strong>dos crías después de 8-12 meses de gestación</strong>dos
            crías después de 8-12 meses de gestación en ciclos bienales, por lo que son animales muy sensibles a la
            sobrepesca.</p>
        </article>

        <article>
          <h2 class="titulo linea">Sabías que…</h2>
          <p>Su temperamento dócil facilita la exhibición en cautividad, donde se puede entrenar para facilitar
            procedimientos veterinarios y exámenes periódicos con técnicas como la desensibilización, el condicionamiento,
            etc.</p>
        </article>
      </div>
      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">Sand tiger shark</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/tiburonToro.jpg') }}" alt="Sand tiger shark" title="Sand tiger shark">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>Like the rest of the sharks, they lack a swim bladder, but they are the only known shark capable of
            swallowing air and filling its stomach like a hydrostatic organ. Its frightening mouth, large and arched,
            shows sharp teeth and arranged in more than one row, used to capture small prey (fish, squid, sharks and rays
            and invertebrates such as crabs and lobsters) that swallows in whole, hence their teeth resemble a simple
            nail.</p>
          <p>Their distribution is circumtropical by the Atlantic and Mediterranean, Red Sea, Indian and Pacific.</p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p>They love to plan by facing currents, using these to stay static in the middle of the water. They move with
            slow movements, always swimming with a fixed course, rarely alter, what they use to hunt. They approach banks
            of fish or squid discreetly, and when they close, they aprroach them with an explosive head movement, and
            capture the more confident animals.</p>
          <p>The bull shark females, have only two cubs, after 8-12 months of gestation in biennial cycles, so they are
            very sensitive to overfishing.</p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>Their docile temperament facilitate the exhibition in captivity, where you can train them to facilitate
            veterinary procedures and periodic examinations with techniques such as desensitization, conditioning, etc.
          </p>
        </article>
      </div>
    </section>
  </div>

@endsection