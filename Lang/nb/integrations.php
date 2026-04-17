<?php declare(strict_types=1);

return array(

    /*
     * 5.0.0
     */
    "app_id"                           => "App ID",
    "app_secret"                       => "App Secret",
    "api_key"                          => "API-nøkkel",

    "algolia_documentation"            => "Les vennligst vår dokumentasjon for oppsett av <a href=':link'>Algolia</a>.",

    "facebook_documentation"           => "Les vennligst vår dokumentasjon for oppsett av <a href=':link'>Facebook</a>.",
    "facebook_redirect_url"            => "Følgende URL <strong>må</strong> angis for Facebook Login 'Gyldige OAuth-omdirigerings-URI-er':",

    "google_documentation"             => "Les vennligst vår dokumentasjon for oppsett av <a href=':link'>Google</a>.",
    "google_redirect_url"              => "Følgende URL(er) <strong>må</strong> angis for Googles 'Autoriserte omdirigerings-URI-er':",

    "microsoft_documentation"          => "Les vennligst vår dokumentasjon for oppsett av <a href=':link'>Microsoft</a>.",
    "microsoft_redirect_url"           => "Følgende URL(er) <strong>må</strong> angis for applikasjonens 'Omdirigerings-URI-er':",

    "pusher_hosting"                   => "Hosting",
    "pusher_cloud"                     => "Sky (pusher.com)",
    "pusher_self_hosted"               => "Selvhostet",
    "pusher_key"                       => "Nøkkel",
    "pusher_secret"                    => "Hemmelighet",
    "pusher_cluster"                   => "Kluster",
    "pusher_internal_host"             => "Intern vert",
    "pusher_internal_host_desc"        => "Det interne vertsnavnet eller IP-adressen til WebSocket-serveren.",
    "pusher_internal_port_desc"        => "Porten til den interne WebSocket-serveren.",
    "pusher_external_host"             => "Ekstern vert",
    "pusher_external_host_desc"        => "Vertsnavnet eller IP-adressen til WebSocket-serveren som er tilgjengelig for offentligheten. La stå tomt for å bruke helpdesken sitt vertsnavn som standard.",
    "pusher_external_port_desc"        => "Porten til den offentlige WebSocket-serveren. La stå tomt for å bruke samme port som webserveren.",
    "pusher_encryption_desc"           => "Aktiver hvis du har konfigurert et SSL-sertifikat på WebSocket-serveren.",
    "pusher_unable_to_receive_updates" => "Kan ikke motta sanntidsoppdateringer. Kontroller internettilkoblingen din.",

    "steam_documentation"              => "Les vennligst vår dokumentasjon for oppsett av <a href=':link'>Steam</a>.",

    "twilio_account_details"           => "Kontodetaljer",
    "twilio_account_details_desc"      => "Konto-SID og auth-token er tilgjengelig på din kontokonsoll under 'Kontoinformasjon'.",
    "twilio_account_sid"               => "Konto-SID",
    "twilio_auth_token"                => "Auth-token",
    "twilio_api_details"               => "API-detaljer",
    "twilio_api_details_desc"          => "Søk etter 'API Keys' i konsollen. Opprett en API-nøkkel og skriv inn nøkkel og hemmelighet nedenfor.",
    "twilio_api_secret"                => "API-hemmelighet",
    "twilio_number_verification"       => "Nummerverifisering",

    "twitter_api_key_secret"           => "API-nøkkelhemmelighet",

    /*
     * 5.3.0
     */
    "twitter_documentation"            => "Les vennligst vår dokumentasjon for oppsett av <a href=':link'>X</a>.",
    "twitter_redirect_url"             => "Følgende URL <strong>må</strong> angis for X-appens 'Tilbakekoblings-URL':",

    /*
     * 5.4.1
     */
    "twilio_verify_sid"                => "Verify SID",
    "twilio_number_verification_desc"  => "Valgfritt - Skriv inn en verifiseringstjeneste-SID for å aktivere verifisering av brukernes telefonnumre. Dette lar brukere verifisere sine egne telefonnumre - <a target='_blank' href='https://www.twilio.com/verify'>Verify</a>-tjenesten fra Twilio er avgiftsbelagt.",
    "twilio_verify_countries"          => "Tillatte land for verifisering",
    "twilio_verify_countries_desc"     => "Begrens telefonnummerverifisering til bestemte land for å redusere kostnader og risiko for misbruk. Telefonnumre som tilhører land utenfor den tillatte listen kan manuelt merkes som verifisert av ansatte.",

    /*
     * 5.5.0
     */
    "algolia_frontend_search_rate_limit" => "Frekvensbegrensning for frontendsøk",
    "algolia_max_daily"                => "Maks forespørsler per dag",
    "algolia_max_daily_desc"           => "Maksimalt antall API-kall som kan gjøres til Algolia fra frontenden.",
    "algolia_max_min"                  => "Maks forespørsler per minutt",
    "algolia_max_min_desc"             => "Maksimalt antall API-kall som kan gjøres til Algolia fra frontenden, per autentisert bruker / IP-adresse.",

    /*
     * 5.7.0
     */
    "microsoft_tenant_id"               => "Tenant-ID",
    "microsoft_tenant_id_desc"          => "Hvis du må bruke én enkelt tenant for støttede kontotyper, skriv inn tenant-ID-en; ellers lar du dette feltet stå tomt. Tenant-ID-en finner du i Microsoft Entra Identity-oversikten.",

);
