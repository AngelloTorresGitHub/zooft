@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      {{-- Sección en Español --}}
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Lobo Gris</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/loboGris.jpg') }}" alt="Lobo Gris" title="Lobo Gris">
        </div>

        <article>
          <h2 class="titulo linea">¿Quién es?</h2>

          <p>Tundras y regiones polares son el hábitat del lobo gris, mamífero emparentado con nuestro perro doméstico,
            los chacales, el dingo australiano o el zorro. Aunque se dice que el lobo gris <strong>es muy
              parecido</strong>, sobre todo, <strong>al husky siberiano</strong>.</p>
          <p>De pelaje largo y blanco, presenta también tonos grisáceos en el dorso.</p>
          <p>Se distribuye por <strong>Groenlandia</strong> y las <strong>islas árticas de Canadá</strong>.</p>
        </article>

        <article>
          <h2 class="titulo linea">¿Cuáles son sus costumbres?</h2>

          <p>El Lobo Ártico abarca vastos territorios para encontrar la comida que necesita, de ahí que <strong>delimite
              con aullidos y marcas olorosas su zona</strong>.</p>
          <p>La estructura social de la <strong>manada está fuertemente jerarquizada y dirigida por una pareja</strong>.
            Se trata del macho y la hembra alfas, quienes suelen ser los únicos que procrean. Son quienes toman las
            decisiones en torno a las actividades del grupo: la caza, qué individuo come primero, a quién se le permite
            procrear, etcétera.</p>
          <p>La madre da a luz a dos o tres crías a finales de mayo o principios de junio, tras una gestación de
            aproximadamente 63 días. Los cachorros no se emancipan de la hembra hasta los dos años.</p>
        </article>

        <article>
          <h2 class="titulo linea">Sabías que…</h2>
          <p>Las <strong>poblaciones de lobos polares se han recuperado un poco en los últimos años</strong>, aunque
            siguen estando amenazadas. La caza, la pérdida del hábitat, los atropellos, los envenenamientos, la falta de
            presas… Son las causas de este declive. Parientes suyos como el Lobo Ibérico se enfrentan a problemas
            similares.</p>
        </article>
      </div>
      {{-- Sección en Ingles --}}
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">Arctic Wolf</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/loboGris.jpg') }}" alt="Arctic Wolf" title="Arctic Wolf">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>Tundras and polar regions are the habitat of the Arctic Wolf, a mammal that is related to canines such as our
            domestic dog, jackals, the Australian dingo and the fox. Though it is said that the Arctic wolf <strong>is
              most similar</strong>, to the, <strong>Siberian husky</strong>.</p>
          <p>It has long and completely white fur and also has greyish tones on its back.</p>
          <p>Its range is <strong>Greenland</strong> and the <strong>Arctic islands of Canada</strong>.</p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p>The Arctic Wolf covers vast territories to find the food you need, hence <strong>delimited with howls and
              scent marks your area</strong>.</p>
          <p>The social structure of the pack is strongly hierarchical and led by a pair. They are the alpha male and
            alpha female, who are usually the only ones who procreate. They take the decisions regarding the pack’s
            activities: hunting, which individual eats first, who is allowed to procreate, etc..</p>
          <p>The mother gives birth to two or three pups at the end of May or the beginning of June, after a gestation of
            approximately 63 days. The pups do not leave the female until they are two years old.</p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>The <strong>populations of Arctic wolves have slowly recovered in recent years</strong>, though they are
            still threatened. Hunting, habitat loss, roadkill, poisoning, lack of prey, etc., are the cause of this
            decline. Their relatives such as the Iberian wolf face similar problems.</p>
        </article>
      </div>
    </section>
  </div>

@endsection