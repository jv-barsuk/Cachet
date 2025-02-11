<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'last_updated' => 'Letztes Update :timestamp',
        'status'       => [
            0 => 'Unbekannt',
            1 => 'Funktionsfähig',
            2 => 'Leistungsprobleme',
            3 => 'Teilweiser Ausfall',
            4 => 'Schwerer Ausfall',
        ],
        'group' => [
            'other' => 'Andere Komponenten',
        ],
        'select_all'   => 'Alle auswählen',
        'deselect_all' => 'Alle abwählen',
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Es liegen keine Vorfälle vor',
        'past'          => 'Vergangene Vorfälle',
        'previous_week' => 'Vorherige Woche',
        'next_week'     => 'Nächste Woche',
        'scheduled'     => 'Geplante Wartungen',
        'scheduled_at'  => ', geplant :timestamp',
        'status'        => [
            0 => 'Geplant', // TODO: Hopefully remove this.
            1 => 'Untersuchungen laufen',
            2 => 'Identifiziert',
            3 => 'Unter Beobachtung',
            4 => 'Behoben',
        ],
    ],

    // Schedule
    'schedules' => [
        'status' => [
            0 => 'Ausstehend',
            1 => 'Laufend',
            2 => 'Abgeschlossen',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => '[0,1] System funktioniert|[2,Inf] Alle Systeme funktionieren',
        'bad'   => '[0,1] System hat momentan Probleme|[2,Inf] Mehrere Systeme haben momentan Probleme',
        'major' => '[0,1] System hat ein schwerwiegendes Problem|[2,Inf] Mehrere Systeme haben ein schwerwiegendes Problem',
    ],

    'api' => [
        'regenerate' => 'API-Schlüssel neu generieren',
        'revoke'     => 'API-Schlüssel widerrufen',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'Letzte Stunde',
            'hourly'    => 'Letzte 12 Stunden',
            'weekly'    => 'Wöchentlich',
            'monthly'   => 'Monatlich',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe'           => 'Abonnieren Sie um die neuesten Updates zu erhalten.',
        'unsubscribe'         => 'Abmelden',
        'button'              => 'Abonnieren',
        'manage_subscription' => 'Benachrichtigungen verwalten',
        'manage'    => [
            'notifications'       => 'Benachrichtigungen',
            'notifications_for'   => 'Benachrichtigungen verwalten für',
            'no_subscriptions'    => 'Du hast im Augenblick alle Benachrichtigungen abonniert.',
            'update_subscription' => 'Benachrichtigungen aktualisieren',
            'my_subscriptions'    => 'Du hast im Augenblick folgende Benachrichtigungen abonniert.',
            'manage_at_link'      => 'Benachrichtigungen verwalten: :link',  
        ],

        'email' => [
            'manage_subscription' => 'Du hast ein E-Mail bekommen, bitte klicke auf den Link um die Benachrichtigungen zu verwalten.',
            'subscribe'          => 'Aktualisierungen per E-Mail abonnieren.',
            'subscribed'         => 'Sie haben E-Mail-Benachrichtigungen abonniert, überprüfen Sie bitte Ihre E-Mail, um Ihr Abonnement zu bestätigen.',
            'updated-subscribe'  => 'Deine Benachrichtigungen wurde erfolgreich aktualisiert.',
            'verified'           => 'Ihre E-Mail-Abonnement ist bestätigt worden. Danke!',
            'manage'             => 'Verwalte deine Abonnements',
            'unsubscribe'        => 'Von E-Mail-Updates deabonnieren.',
            'unsubscribed'       => 'Ihre E-Mail-Abonnement wurde gekündigt.',
            'failure'            => 'Etwas ist mit dem Abonnement schief gelaufen.',
            'already-subscribed' => 'Abonnement für :email konnte nicht registriert werden, da die E-Mail Adresse schon registriert ist.',
            'verify'             => [
                'text'   => "Bitte bestätige die E-Mail-Benachrichtigungen unter :app_name status updates.\n:link",
                'html'   => '<p>Bitte bestätige deine E-Mail-Benachrichtigung unter :app_name status updates.</p>',
                'button' => 'Abonnement bestätigen',
            ],
            'maintenance' => [
                'subject' => '[Planmäßige Wartung] :name',
            ],
            'incident' => [
                'subject' => '[Neuer Vorfall] :status: :name',
            ],
            'component' => [
                'subject'       => 'Komponent Status Update',
                'text'          => 'Der Komponent :component_name hatte eine Status-Änderung. Der Komponent befindet sich nun im :component_human_status.\nDanke, :app_name',
                'html'          => '<p>Der Komponent :component_name hatte eine Status-Änderung. Der Komponent befindet sich nun im :component_human_status.</p><p>Danke, :app_name</p>',
                'tooltip-title' => 'Neuigkeiten für :component_name abonnieren.',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => "Du wurdest in das Team :app_name Status Seite eingeladen. Um dich zu registrieren klicke den Link.\n:link\nDanke, :app_name",
                'html' => '<p>Du wurdest in das Team :app_name Status Seite eingeladen. Um dich zu registrieren klicke den Link.</p><p><a href=":link">:link</a></p><p>Danke, :app_name</p>',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'Registrieren',
        'username' => 'Benutzername',
        'email'    => 'E-Mail',
        'password' => 'Passwort',
        'success'  => 'Dein Konto wurde erfolgreich erstellt.',
        'failure'  => 'Bei der Registrierung ist etwas schief gegangen.',
    ],

    'system' => [
        'update' => 'Es ist eine neuere Version von Cachet verfügbar. Siehe <a href="https://docs.cachethq.io/docs/updating-cachet">hier</a>!, wie du das Update installierst!',
    ],

    // Modal
    'modal' => [
        'close'     => 'Schließen',
        'subscribe' => [
            'title'  => 'Abonniere die Komponenten-Updates',
            'body'   => 'Gib deine E-Mail Adresse ein, um Updates für diesen Komponenten zu erhalten. Wenn du bereits abonniert bist, erhälst du schon Updates für diesen Komponenten.',
            'button' => 'Abonnieren',
        ],
    ],

    // Meta descriptions
    'meta' => [
        'description' => [
            'incident'  => 'Details und Updates über :name welcher am :date aufgetreten ist',
            'schedule'  => 'Details über die geplante Wartung am :name ab :startDate',
            'subscribe' => 'Anmelden um Benachrichtigungen von :app zu zu erhalten',
            'overview'  => 'Bleibe up to date mit den neusten Benachrichtigungen zu: :app.',
        ],
    ],

    // Other
    'home'            => 'Startseite',
    'description'     => 'Bleiben sie up to date mit den neuesten Benachrichtigungen von: :app.',
    'powered_by'      => 'Powered by <a href="https://cachethq.io" class="links">Cachet</a>.',
    'about_this_site' => 'Über diese Seite',
    'rss-feed'        => 'RSS',
    'atom-feed'       => 'Atom',
    'feed'            => 'Status-Feed',

];
