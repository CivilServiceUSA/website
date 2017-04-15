<div class="component-person-card wow fadeIn {{ $classes }} <?php if ($key === 0 || $key % 5 === 0) { echo $offset; } ?>">
    <h5 class="no-pad person-name">
        <a href="/us-house/{{ $representative->state_name_slug }}/representative/{{ $representative->name_slug }}" title="View {{ titleCase($representative->title) }} {{ $representative->name }}'s Profile">
            {{ $representative->name }}
        </a>
    </h5>
    <h6 class="person-title">{{ titleCase($representative->title) }}</h6>
    <p>
        <a href="/us-house/{{ $representative->state_name_slug }}/representative/{{ $representative->name_slug }}" class="person-image" title="View {{ titleCase($representative->title) }} {{ $representative->name }}'s Profile">
            <img src="{{ $representative->photo_url_sizes->size_1024x1024 }}" onerror="this.src='/img/no-photo.jpg';this.onerror=null;" alt="{{ titleCase($representative->title) }}" class="img-responsive center-block">
        </a>
    </p>
    <ul class="list-inline contact-options">
      <?php if ($representative->twitter_url): ?>
        <li><a href="{{ $representative->twitter_url }}" target="_blank" rel="noreferrer"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
      <?php endif; ?>
      <?php if ($representative->facebook_url): ?>
        <li><a href="{{ $representative->facebook_url }}" target="_blank" rel="noreferrer"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
      <?php endif; ?>
      <?php if ($representative->website): ?>
        <li><a href="{{ $representative->website }}" target="_blank" rel="noreferrer"><i class="fa fa-external-link fa-2x fa-fw"></i></a></li>
      <?php endif; ?>
    </ul>
    <h5 class="person-state with-district {{ $representative->party }}">{{ titleCase($representative->state_name_slug) }} [{{ substr($representative->party, 0, 1) }}]</h5>
    <?php if ($representative->district): ?>
    <h5 class="person-district">District {{ $representative->district }}</h5>
    <?php elseif ($representative->at_large): ?>
    <h5 class="person-district">At-Large</h5>
    <?php endif; ?>

    <p class="person-bio">
        {{ truncateText($representative->biography, 90) }}<br><br>
        <a href="/us-house/{{ $representative->state_name_slug }}/representative/{{ $representative->name_slug }}" class="btn btn-gray btn-xs" title="View {{ titleCase($representative->title) }} {{ $representative->name }}'s Profile">
            Read More
        </a>
    </p>

    <!-- Structured Metadata -->
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "GovernmentOrganization",
          "name": "United States House of Representatives",
          "member": {
            "@type": "OrganizationRole",
            "member": {
              "@type": "Person",
              "name": "{{ $representative->name }}",
              "gender": "{{ titleCase($representative->gender) }}",
              "birthDate": "{{ date_format(date_create($representative->date_of_birth), 'F jS, Y') }}",
              "image": "{{ $representative->photo_url_sizes->size_512x512 }}",
              "jobTitle": "{{ titleCase($representative->title) }}",
              "url": "{{ $representative->website }}",
              "description": "{{ $representative->biography }}",
              "telephone": "{{ $representative->phone }}",
              "sameAs": [
                "{{ $representative->contact_page }}",
                "{{ $representative->twitter_url }}",
                "{{ $representative->facebook_url }}",
                "{{ $representative->opensecrets_url }}",
                "{{ $representative->votesmart_url }}"
              ]
            },
            "startDate": "{{ date_format(date_create($representative->entered_office), 'F jS, Y') }}",
            "endDate": "{{ date_format(date_create($representative->term_end), 'F jS, Y') }}",
            "roleName": "{{ titleCase($representative->title) }}"
          }
        }
    </script>
</div>
<?php if(($key+1) % 5 === 0) { echo '</div><div class="row">'; } ?>
