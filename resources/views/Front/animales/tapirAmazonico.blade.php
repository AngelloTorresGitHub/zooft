@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Tapir Amazónico</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/tapirAmazonico.jpg') }}" alt="Tapir Amazónico" title="Tapir Amazónico">
        </div>

        <article>
          <h2 class="titulo linea">¿Quién es?</h2>

          <p>Resulta aparentemente raro, pero este animal es <strong></strong>pariente lejano de especies como el
            <strong></strong>rinoceronte o el caballo.</p>
          <p>Presenta, por ejemplo, una delgada cresta muscular a modo de crin, de la frente a los hombros (que le ayuda,
            además, a protegerse de los mordiscos de sus depredadores). Es un mamífero robusto, de cuello grueso, aspecto
            cilíndrico y pelaje corto color canela que le permite pasar inadvertido en la selva umbrosa.</p>
          <p>El bosque tropical y subtropical, entre los 200 y los 1.500 de altitud, es su hábitat natural
            (<strong></strong>Colombia, Venezuela, Paraguay, norte de Argentina). Los sentidos más desarrollados del Tapir
            amazónico son el oído y el olfato. Aunque su principal enemigo es el jaguar, la caza y la destrucción de su
            entorno es lo que le ha puesto en situación de vulnerabilidad.</p>
        </article>

        <article>
          <h2 class="titulo linea">¿Cuáles son sus costumbres?</h2>

          <p>El Tapir amazónico lleva una vida <strong></strong>solitaria y nocturna. Pese a su tamaño, resulta difícil
            contemplarle en su territorio, que marca con orina cuando se va de caminata. <strong></strong>Suele vivir
            cerca de los cursos de agua, donde la vegetación es más tierna (se alimenta de hojas, ramas, brotes, gramíneas
            y frutos, eventualmente).</p>
          <p>La hembra tiene un período de gestación de 13 meses y alcanza la madurez sexual con cuatro años. Este animal
            da grandes caminatas a través de un territorio que va marcando con orina.</p>
        </article>

        <article>
          <h2 class="titulo linea">Sabías que…</h2>
          <p>Al Tapir amazónico <strong></strong>le gusta mucho nadar y sumergirse. De hecho, se caracteriza por ser un
            gran nadador.</p>
        </article>
      </div>
      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">South American Tapir</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/tapirAmazonico.jpg') }}" alt="South American Tapir" title="South American Tapir">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>It has a strange appearance but this animal is a distant relative of species such as the rhinos or the
            horse.</p>
          <p>For example, it has a thin muscular crest like a mane, from its forehead to its shoulders (which helps it,
            moreover, to protect it from the bites of its predators). It is a robust mammal, with a thick neck, a
            cylindrical appearance and short, cinnamon-coloured fur which allows it to remain unnoticed in the shadowy
            jungle. </p>
          <p>Tropical and subtropical forest, between 200m and 1,500m high, is its natural habitat (<strong>Colombia,
              Venezuela, Paraguay, northern Argentina</strong>). The most-developed senses of the <strong>South American
              tapir</strong> are hearing and smell. Though its main enemy is the jaguar, hunting and habitat destruction
            are what have made it vulnerable.</p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p>The South American tapir leads a solitary nocturnal life. Despite its size, it's difficult to see it in its
            territory, which it marks with urine when walking. It usually lives near water course, where the vegetation is
            softer (it feeds on leaves, twigs, shoots, grasses and fruit on occasion).</p>
          <p>The female's gestation lasts 13 months and reaches sexual maturity when she is four years old. This animal
            takes long walks through territory it marks with urine as it passes.</p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>The South American tapir loves to swim and submerge itself. In fact, it is a great swimmer.</p>
        </article>
      </div>
    </section>
  </div>

@endsection