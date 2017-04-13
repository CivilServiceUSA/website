<div class="component-person-card wow fadeIn {{ $classes }} <?php if ($key === 0 || $key % 5 === 0) { echo $offset; } ?>">
    <h5 class="no-pad person-name">{{ $senator->name }}</h5>
    <h6 class="person-title">{{ titleCase($senator->title) }}</h6>
    <p>
        <a href="/us-senate/{{ $senator->state_name_slug }}/senator/{{ $senator->name_slug }}" class="person-image" title="View {{ titleCase($senator->title) }} {{ $senator->name }}'s Profile">
            <img src="{{ $senator->photo_url_sizes->size_1024x1024 }}" onerror="this.src='/img/no-photo.jpg';this.onerror=null;" alt="{{ titleCase($senator->title) }}" class="img-responsive center-block">
        </a>
    </p>
    <ul class="list-inline contact-options">
      <?php if ($senator->twitter_url): ?>
        <li><a href="{{ $senator->twitter_url }}" target="_blank" rel="noreferrer"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
      <?php endif; ?>
      <?php if ($senator->facebook_url): ?>
        <li><a href="{{ $senator->facebook_url }}" target="_blank" rel="noreferrer"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
      <?php endif; ?>
      <?php if ($senator->website): ?>
        <li><a href="{{ $senator->website }}" target="_blank" rel="noreferrer"><i class="fa fa-external-link fa-2x fa-fw"></i></a></li>
      <?php endif; ?>
    </ul>
    <h5 class="person-state {{ $senator->party }}">{{ titleCase($senator->state_name_slug) }} [{{ substr($senator->party, 0, 1) }}]</h5>
    <p class="person-bio">{{ truncateText($senator->biography, 100) }}</p>

    <!-- Structured Metadata -->
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "GovernmentOrganization",
          "name": "United States Senate",
          "member": {
            "@type": "OrganizationRole",
            "member": {
              "@type": "Person",
              "name": "{{ $senator->name }}",
              "gender": "{{ titleCase($senator->gender) }}",
              "birthDate": "{{ date_format(date_create($senator->date_of_birth), 'F jS, Y') }}",
              "image": "{{ $senator->photo_url_sizes->size_512x512 }}",
              "jobTitle": "{{ titleCase($senator->title) }}",
              "url": "{{ $senator->website }}",
              "description": "{{ $senator->biography }}",
              "telephone": "{{ $senator->phone }}",
              "sameAs": [
                "{{ $senator->contact_page }}",
                "{{ $senator->twitter_url }}",
                "{{ $senator->facebook_url }}",
                "{{ $senator->opensecrets_url }}",
                "{{ $senator->votesmart_url }}"
              ]
            },
            "startDate": "{{ date_format(date_create($senator->entered_office), 'F jS, Y') }}",
            "endDate": "{{ date_format(date_create($senator->term_end), 'F jS, Y') }}",
            "roleName": "{{ titleCase($senator->title) }}"
          }
        }
    </script>
</div>
<?php if(($key+1) % 5 === 0) { echo '</div><div class="row">'; } ?>
