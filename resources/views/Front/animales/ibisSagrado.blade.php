@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Ibis Sagrado</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/ibisSagrado.jpg') }}" alt="Ibis Sagrado" title="Ibis Sagrado">
        </div>

        <article>
          <h2 class="titulo linea">¿Quién es?</h2>

          <p>El Ibis Sagrado posee <strong>plumaje blanco y negro en la cabeza y la cola</strong>. Su nombre se debe al
            dios Thot, al que encarnaba (de ahí que se le domesticara para permanecer en templos y parques, donde los
            antiguos egipcios le rendían culto). Cuando moría era momificado y recibía sepultura. Hoy en día, sin embargo,
            es un ave desaparecida de Egipto.</p>
          <p>Se encuentra principalmente en las corrientes y zonas lacustres del sur de <strong>África y Asia</strong>. Se
            alimenta principalmente de insectos y lombrices, además de crustáceos y pequeños reptiles, a los que captura
            con su largo pico curvo.</p>
        </article>

        <article>
          <h2 class="titulo linea">¿Cuáles son sus costumbres?</h2>

          <p>El ibis es un animal <strong>carnívoro</strong>, su dieta es muy parecida a la de las cigüeñas o los
            marabúes. Se alimenta de insectos y lombrices, además de crustáceos y pequeños reptiles, a los que captura con
            su largo pico.</p>
          <p>Ave diurna y gregaria, habita en las orillas de los <strong>ríos, lagos y aguas estancadas</strong>. Es capaz
            de formar en ocasiones colonias muy numerosas. Construye los nidos sobre los árboles, donde nacen los
            polluelos (blancos, a excepción de cuello y cabeza, negros y sin plumas). La incubación dura unos 28 o 29 días
            y es efectuada por los dos miembros de la pareja.</p>
        </article>

        <article>
          <h2 class="titulo linea">Sabías que…</h2>
          <p>Las crías del Ibis Sagrado abandonan el nido a los 20 días de nacer para reunirse en una especie de
            <strong>guardería</strong>. Antes del segundo mes de vida adquieren su independencia.</p>
        </article>
      </div>
      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">Sacred ibis</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/ibisSagrado.jpg') }}" alt="Sacred ibis" title="Sacred ibis">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>The sacred ibis has black and white plumage on the head and tail. Its name comes from the god Thot, who
            became incarnate in it (hence it was domesticated to remain in temples and parks, where the Ancient Egyptians
            worshipped it). When it died it was mummified and was buried. Nowadays, however, it is a bird which is extinct
            in Egypt. It is found mainly in the currents and lake areas in the south of Africa.</p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p>The ibis is a carnivorous animal, which can even feed on carrion (its diet is very similar to that of storks
            or marabou storks). A diurnal and gregarious animal, it is able to form very numerous colonies on occasion. It
            makes its nest on trees, where the chicks are born (they are white, except for their neck and head, which are
            black, and featherless). Brooding lasts about 28 or 29 days and is carried out by both members of the pair.
          </p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>The chicks of the sacred ibis leave the nest 20 days after hatching to join a sort of nursery. They become
            independent before their second month.</p>
        </article>
      </div>
    </section>
  </div>

@endsection
