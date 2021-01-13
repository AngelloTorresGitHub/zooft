@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Lince ibérico</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/linceIberico.jpg') }}" alt="Lince ibérico" title="Lince ibérico">
        </div>

        <article>
          <h2 class="titulo linea">¿Quién es?</h2>

          <p>El lince ibérico es el felino más grade del <strong>sur de Europa</strong> y el <strong>más amenazado del
              Planeta</strong>. Es una especie endémica de la Península Ibérica y originalmente distribuida por toda ella.
            Actualmente su población se compone de <strong>404 ejemplares</strong>, lo que ha permitido que pase de estar
            clasificada como &quot;en peligro crítico&quot; a &quot;en peligro&quot;.</p>
          <p>Esbelto y de <strong>patas largas</strong> (82-103cm de longitud y 36-55cm de altura), es inconfundible por
            sus <strong>barbas</strong> y los <strong>pinceles negros</strong> a la punta de sus <strong>orejas</strong>.
            El pelaje es de color pardo con manchas oscuras de tamaño y densidad variable según los individuos.</p>
          <p>La <strong>cola corta</strong> es característica de todos los linces del mundo.</p>
        </article>

        <article>
          <h2 class="titulo linea">¿Cuáles son sus costumbres?</h2>

          <p>Las hembras crían <strong>una vez al año</strong> y no todos los años. Los partos tienen lugar entre marzo y
            abril, tras aproximadamente dos meses de gestación. Las crías son poco móviles y mantienen los <strong>ojos
              cerrados</strong> durante los primeros 12 días de vida. Pueden nacer hasta cuatro cachorros.</p>
          <p>El <strong>conejo</strong> supone más del 90% de su alimentación, si bien ocasionalmente, puede capturar
            otras presas como ciervos, gamos, perdices, micromamíferos y aves acuáticas.</p>
          <p>Los linces son <strong>solitarios y territoriales</strong>. Defienden con exclusividad el centro de su área
            de campeo ante individuos subadultos o adultos del mismo sexo. </p>
        </article>

        <article>
          <h2 class="titulo linea">Sabías que…</h2>
          <p>Aunque se parece a un gato grande, se relaciona más con un <strong>león de pequeño tamaño</strong>.</p>
        </article>
      </div>
      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">Iberian lynx</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/linceIberico.jpg') }}" alt="Iberian lynx" title="Iberian lynx">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>The Iberian lynx is the largest feline in <strong>southern Europe</strong> and the <strong>most threatened on
              the planet</strong>. It is an endemic species of the <strong>Iberian Peninsula</strong> and originally
            distributed throughout. Currently its population consists of <strong>404 specimens</strong>. They were
            classified as &quot;critically endangered&quot; and now they are just as
            &quot;<strong>endangered&quot;</strong>.</p>
          <p>Slender, with long legs (82 - 103 cm in length and 36 - 55 cm high), an <strong>unmistakable beard</strong>
            and <strong>black tips</strong> to its ears. The coat is brown with <strong>dark spots</strong> of varying
            sizes and density depending on the individual.</p>
          <p>The <strong>short tail</strong> is characteristic of all lynxes worldwide. </p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p>Females give birth <strong>once a year</strong> and not every year. Births take place between March and
            April, after about <strong>two months of gestation</strong>. Cubs are not very mobile and they keep their
            <strong>eyes closed</strong> during the first 12 days of life. They can birth from one to four cubs.</p>
          <p><strong>Rabbit</strong> takes more than 90% of their diet, although occasionally they can capture other prey
            like deer, fallow deers, partridges, small mammals and waterfowl.</p>
          <p>They are <strong>solitary and territorial</strong>. They defend exclusively the center of their home range to
            subadults or adults of the same sex.</p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>Although it looks like a large cat, it is closer to a <strong>small lion</strong>.</p>
        </article>
      </div>
    </section>
  </div>

@endsection