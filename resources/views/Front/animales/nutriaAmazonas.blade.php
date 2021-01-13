@extends('Front.layoutFront')

@section('content')

<div>
    <section id="inicio">
      <!-- Sección en Español -->
      <div class="container-section esp" id="esp">
        <h1 class="titulo linea">Nutrias Gigantes de Amazonas</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/nutriaAmazonas.jpg') }}" alt="Nutrias Gigantes de Amazonas" title="Nutrias Gigantes de Amazonas">
        </div>

        <article>
          <h2 class="titulo linea">¿Quién es?</h2>

          <p>Esta variedad de nutria, como su nombre indica, es <strong>la más grande de la familia de las
              nutrias</strong>. Puede llegar a alcanzar dos metros de longitud y 32 kilogramos de peso.</p>
          <p>El cuerpo de la Nutria Gigante del Amazonas es alargado; sus patas, cortas y gruesas, terminan en grandes
            pies, provistos de membranas interdigitales que le ayudan a maniobrar y tomar impulso durante el nado lento.
            Cuando quiere nadar más rápido utiliza la cola, ancha y plana.</p>
          <p>Su pelaje es marrón oscuro y muy denso, salvo en la zona de la garganta (donde presenta varias manchas
            claras, únicas para cada individuo; lo que permite su reconocimiento e identificación a simple vista).</p>
          <p>Su <strong>esperanza de vida puede superar los 15 años</strong>.</p>
          <p>Estas nutrias habitan en ríos, lagos, arroyos y pantanos de los bosques tropicales en Sudamérica. Es allí
            donde se dedican a despejar grandes áreas de vegetación para construir sus madrigueras.</p>
        </article>

        <article>
          <h2 class="titulo linea">¿Cuáles son sus costumbres?</h2>

          <p>Es un animal muy sociable que <strong>vive en grupos familiares de hasta diez individuos</strong>, formados
            por una pareja adulta y varias generaciones de crías.</p>
          <p>Especialmente <strong>ruidosa, activa, curiosa y juguetona</strong>, usa un amplio repertorio de
            vocalizaciones (algunas de ellas las utiliza, junto con excrementos y secreciones glandulares, para marcar el
            territorio o dar señales de alarma ante una amenaza).</p>
          <p>Las hembras dan a luz entre una y cinco crías, después de una gestación que dura alrededor de 70 días; paren
            en las madrigueras, construidas cerca de la ribera del río y los sitios de pesca. Machos y hermanos mayores
            participan en la crianza de la camada, cuya vulnerabilidad aprovechan en ocasiones los caimanes.</p>
          <p>La alimentación de estas nutrias gigantes consiste, principalmente, en peces (aunque también come cangrejos,
            serpientes e incluso pequeños caimanes).</p>
        </article>

        <article>
          <h2 class="titulo linea">Sabías que…</h2>
          <p>La Nutria Gigante del Amazonas <strong>no tiene enemigos naturales</strong>. La caza furtiva, la pérdida del
            hábitat, la sobrepesca y la contaminación son los factores que ponen en peligro su existencia.</p>
        </article>
      </div>
      <!-- Sección en Ingles -->
      <div class="container-section eng hidden" id="eng">
        <h1 class="titulo linea">Giant Otters</h1>

        <div class="imagen">
          <img src="{{ asset('storage/imgAnimales/nutriaAmazonas.jpg') }}" alt="Giant Otters" title="Giant Otters">
        </div>

        <article>
          <h2 class="titulo linea">Who is it?</h2>

          <p>
            This variety of otter, as its name suggests, is the largest of the otter family. It can reach two meters in
            length and 32 kilograms in weight.</p>
          <p>The body of the Giant Amazon Otter is elongated; its legs, short and thick, end in large feet, provided with
            interdigital membranes that help it to maneuver and gain momentum during slow swimming. When he wants to swim
            faster, he uses his tail, wide and flat.</p>
          <p>Its fur is dark brown and very dense, except in the throat area (where it presents several light spots,
            unique for each individual; which allows its recognition and identification with the naked eye).</p>
          <p>Their life expectancy can exceed 15 years.</p>
          <p>These otters inhabit rivers, lakes, streams, and swamps in tropical forests in South America. It is there
            where they are dedicated to clearing large areas of vegetation to build their burrows.</p>
        </article>

        <article>
          <h2 class="titulo linea">What are its habits?</h2>

          <p>
            It is a very sociable animal that lives in family groups of up to ten individuals, made up of an adult couple
            and several generations of offspring.</p>
          <p>Especially noisy, active, curious and playful, she uses a wide repertoire of vocalizations (some of them are
            used, along with excrement and glandular secretions, to mark territory or give alarm signals in the event of a
            threat).</p>
          <p>The females give birth between one and five young, after a gestation that lasts around 70 days; stop at
            burrows, built near riverbanks and fishing grounds. Males and older brothers participate in raising the
            litter, whose vulnerability is sometimes exploited by alligators.</p>
          <p>The diet of these giant otters consists mainly of fish (although they also eat crabs, snakes and even small
            alligators).</p>
        </article>

        <article>
          <h2 class="titulo linea">Did you know…</h2>
          <p>The Amazon Giant Otter has no natural enemies. Poaching, habitat loss, overfishing and pollution are the
            factors that threaten their existence.</p>
        </article>
      </div>
    </section>
  </div>

@endsection