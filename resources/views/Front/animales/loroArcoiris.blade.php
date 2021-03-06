@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Loris Arco Iris</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/lorisArcoiris.jpg') }}" alt="Loris Arco Iris" title="Loris Arco Iris">
        </div>

        <article>
          <h2 class="titulo linea">¿Quién es?</h2>

          <p>Existen al menos <strong>22 subespecies</strong> conocidas de Loris Arco Iris, diferenciadas entre sí por el
            <strong>color de la cabeza, nuca y pecho</strong>. El color que predomina en el robusto cuerpo de esta ave es
            el verde: en la espalda, obispillo y la cola puntiaguda. El pico de los ejemplares jóvenes es de color marrón
            oscuro (el de los adultos, anaranjado o rojo). Cuando vuela, el loris despliega sus brillantes alas y chilla
            mucho. Mientras se alimenta, en cambio, el loris arcoiris es silencioso (tanto es así que llega a pasar
            inadvertido entre la vegetación, dado su plumaje verde). Dentro de las islas de su área de distribución, y
            dada la ausencia de depredadores, ha adoptado una forma de <strong>vida preferentemente terrestre</strong>.
          </p>
        </article>

        <article>
          <h2 class="titulo linea">¿Cuáles son sus costumbres?</h2>

          <p>Normalmente vive en <strong>grandes bandadas</strong> ya que es un animal sociable capaz de formar grupos
            mixtos con otras especies. Se alimenta sobre todo de <strong>néctar, frutas maduras, flores e
              insectos</strong> (alimentos blandos, ricos en proteínas y vitaminas). Su propia lengua, con forma de
            escobilla, se ha adaptado a esta dieta: usa el pico para aplastar la pulpa de la fruta y extraer el jugo y las
            semillas. No existe dimorfismo sexual aparente, y solamente la hembra incuba los huevos durante unos 27 días,
            aunque el nido es preparado por ambos sexos, que se ocupan por igual de alimentar las crías. Éstas se marchan
            del nido a las ocho semanas de nacer.</p>
        </article>

        <article>
          <h2 class="titulo linea">Sabías que…</h2>
          <p>Los nidos del Loris Arco Iris suelen encontrarse en <strong>huecos de madera podrida</strong>, así como en
            las <strong>ramas extremas de los eucaliptos</strong>. La puesta oscila entre los tres y cuatro huevos, y se
            produce en intervalos de uno o dos días.</p>
        </article>
      </div>
      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">Rainbow lorikeet</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/lorisArcoiris.jpg') }}" alt="Rainbow lorikeet" title="Rainbow lorikeet">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>There are at least 22 known subspecies of rainbow lorikeet, differentiated by the colour of their head, nape
            and chest. The predominant colour in this robust bird&#39;s chest is green: on its back, rump and pointed tail.
            Juveniles&#39; beaks are dark brown in colour (that of the adults is orangey or red). When it flies, it spreads
            its bright wings and screeches a lot. When feeding, however, the rainbow lorikeet is silent (to such an extent
            that it may remain unnoticed among the vegetation, due to its green plumage). Within the islands of its range,
            and given the absence of predators, it has adopted a preferentially terrestrial way of life.</p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p>It normally lives is large flocks since it is a gregarious animal capable of forming mixed groups with other
            species. It feeds above all on nectar, mature fruit, flowers and insects (soft foods, rich in proteins and
            vitamins). Its own tongue, in the shape of a broom, has adapted to this diet: it uses its beak to crush the
            pulp of the fruit and extract the juice and seeds. There is no visible sexual dimorphism, and only the female
            broods on the eggs for about 27 days, although the nest is prepared by both sexes, which share the task of
            feeding the chicks. The leave the nest eight weeks after hatching.</p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>Rainbow lorikeet nests are usually found in hollows of rotten wood, as well as in the end branches of the
            eucalyptus. The clutch varies between three and four eggs, and are laid at intervals of one or two days.</p>
        </article>
      </div>
    </section>
  </div>

@endsection