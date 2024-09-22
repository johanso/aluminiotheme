<?php
function render_testimonials_section($title, $subtitle) {?>

<section class="bg-white py-8 md:py-12">
  <div class="container">
    <div class='section-heading mb-6'>
      <h2 class="title-heading"><?php echo esc_html($title); ?></h2>
      <p class="subtitle-heading"><?php echo esc_html($subtitle); ?></p>
    </div>

    <p class='text-gray-700 mb-6'>En <strong>Conceptos en Aluminio</strong> la satisfacción de nuestros clientes es nuestra mayor prioridad. A lo largo de más de 10 años, hemos trabajado en proyectos de diversa índole en Barranquilla y la región Caribe, siempre con un enfoque en la calidad y la precisión. Aquí te compartimos algunas opiniones de quienes han confiado en nosotros para transformar sus espacios:</p>

    <div class="flex justify-center gap-8 mt-10 [mask-image:linear-gradient(to_bottom,transparent,black_25%,black_25%,transparent)] max-h-[738px] overflow-hidden">
      <div class="testimonials-column flex flex-col gap-6 pb-6" data-duration="15"></div>
      <div class="testimonials-column hidden md:flex flex-col gap-6 pb-6" data-duration="19"></div>
      <div class="testimonials-column hidden lg:flex flex-col gap-6 pb-6" data-duration="17"></div>
    </div>
  </div>
</section>

<style>

  .testimonials-column.animate {
    animation: scrollUp linear infinite;
  }

  @keyframes scrollUp {
    0% {
      transform: translateY(0);
    }
    100% {
      transform: translateY(-50%);
    }
  }
</style>

<script>

  const testimonials = [
    {
      text: "El equipo de Conceptos en Aluminio fue increíblemente profesional y eficiente. Instalaron las ventanas y puertas de nuestra nueva casa en tiempo récord, y la calidad es insuperable. Estamos muy contentos con el resultado final.",
      name: "Juan Carlos Mendoza",
      cargo: "Propietario Residencial",
    },
    {
      text: "La remodelación de nuestra oficina fue un éxito gracias a Conceptos en Aluminio. Las divisiones de vidrio no solo mejoraron la estética del lugar, sino que también nos ayudaron a crear un ambiente más productivo. ¡Excelente trabajo!",
      name: "Marta Gutiérrez",
      cargo: "Administradora de Oficina",
    },
    {
      text: "Siempre es un placer trabajar con empresas que entienden las necesidades del cliente. Esta empresa nos proporcionó barandas de acero de primera calidad para un proyecto comercial, y el resultado fue impecable. Muy recomendados.",
      name: "Roberto Pardo",
      cargo: "Contratista",
    },
    {
      text: "Requeríamos una fachada flotante para nuestro nuevo edificio, y Conceptos en Aluminio superó nuestras expectativas. La atención al detalle y la calidad de los materiales utilizados fueron excepcionales. ¡Gracias por todo!",
      name: "Luis Eduardo Hernández",
      cargo: "Arquitecto",
    },
    {
      text: "La instalación de divisiones de baño y oficina en nuestro local fue rápida y sin contratiempos. El equipo de Conceptos en Aluminio demostró gran experiencia y profesionalismo. Quedamos muy satisfechos con el trabajo realizado.",
      name: "Sandra Salcedo",
      cargo: "Propietaria de Negocio",
    },
    {
      text: "Trabajar con Conceptos en Aluminio fue una gran experiencia. Necesitábamos portones de aluminio para nuestra finca en las afueras de Barranquilla, y no solo cumplieron con nuestras expectativas, sino que las superaron en todos los aspectos.",
      name: "Jorge Mario Vélez",
      cargo: "Propietario de Finca",
    },
    {
      text: "En nuestro proyecto de construcción en Cartagena, elegimos a Conceptos en Aluminio para las ventanas y cerramientos. La calidad del trabajo y la atención personalizada nos dejaron muy satisfechos. Sin duda, seguiremos contando con ellos para futuros proyectos.",
      name: "Carmen Ávila",
      cargo: "Desarrolladora Inmobiliaria",
    },
    {
      text: "Conceptos en Aluminio ha sido nuestro aliado estratégico en varios proyectos de renovación en Santa Marta. Su capacidad para entregar soluciones a medida, adaptándose a nuestros requerimientos, es lo que nos hace seguir eligiéndolos.",
      name: "Raúl Andrade",
      cargo: "Ingeniero Civil",
    },
    {
      text: "Necesitábamos una empresa de confianza para realizar un trabajo complejo de vidrio templado y aluminio en nuestro nuevo restaurante en Barranquilla. Conceptos en Aluminio hizo un trabajo impecable, y el lugar quedó espectacular. ¡Muy satisfechos!",
      name: "Laura Ríos",
      cargo: "Propietaria de Restaurante",
    },
  ];
    
  const firstColumn = testimonials.slice(0, 3);
  const secondColumn = testimonials.slice(3, 6);
  const thirdColumn = testimonials.slice(6, 9);

  const columns = [firstColumn, secondColumn, thirdColumn];
  const columnElements = document.querySelectorAll('.testimonials-column');

  columnElements.forEach((columnEl, index) => {
    const duration = columnEl.dataset.duration;

    // Crear contenido duplicado para el efecto de loop
    const testimonialContent = [...new Array(2)].fill(0).flatMap(() => columns[index] || []).map(testimonial => {
      const div = document.createElement('div');
      div.className = 'card';
      div.innerHTML = `
        <div>${testimonial.text}</div>
        <div class="flex items-center mt-5 gap-2">
          <div class="flex flex-col">
            <div class="font-medium tracking-tight leading-5">${testimonial.name}</div>
            <div class="text-sm leading-5 tracking-tight">${testimonial.cargo}</div>
          </div>
        </div>`;
      return div;
    });

    testimonialContent.forEach(el => columnEl.appendChild(el));

    // Agregar animación personalizada
    columnEl.style.animationDuration = `${duration}s`;
    columnEl.classList.add('animate');
  });
</script>

<?php } ?>