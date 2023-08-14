<?php

$projects = [
    [
        "image_path" => '../src/pages/projects/img/project1.png',
        "title" => 'SocialDev',
        "description" => 'SocialDev is a user-friendly web application crafted using React, Firebase, and Sass. It enables recruiters to discover skilled developers and developers to explore job opportunities. Customize profiles and connect effortlessly.',
        "tech" => [
            [
                'icon_path' => '',
                'name' => 'React'
            ],
            [
                'icon_path' => '',
                'name' => 'Firebase'
            ],
            [
                'icon_path' => '',
                'name' => 'SASS'
            ]
        ]
    ],
    [
        "image_path" => '../src/pages/projects/img/project2.png',
        "title" => 'SocialDev',
        "description" => 'SocialDev is a user-friendly web application crafted using React, Firebase, and Sass. It enables recruiters to discover skilled developers and developers to explore job opportunities. Customize profiles and connect effortlessly.',
        "tech" => [
            [
                'icon_path' => '',
                'name' => 'React'
            ],
            [
                'icon_path' => '',
                'name' => 'Firebase'
            ],
            [
                'icon_path' => '',
                'name' => 'SASS'
            ]
        ]
    ],
    [
        "image_path" => '../src/pages/projects/img/project3.png',
        "title" => 'SocialDev',
        "description" => 'SocialDev is a user-friendly web application crafted using React, Firebase, and Sass. It enables recruiters to discover skilled developers and developers to explore job opportunities. Customize profiles and connect effortlessly.',
        "tech" => [
            [
                'icon_path' => '',
                'name' => 'React'
            ],
            [
                'icon_path' => '',
                'name' => 'Firebase'
            ],
            [
                'icon_path' => '',
                'name' => 'SASS'
            ]
        ]
    ],
    [
        "image_path" => '../src/pages/projects/img/project4.png',
        "title" => 'SocialDev',
        "description" => 'SocialDev is a user-friendly web application crafted using React, Firebase, and Sass. It enables recruiters to discover skilled developers and developers to explore job opportunities. Customize profiles and connect effortlessly.',
        "tech" => [
            [
                'icon_path' => '',
                'name' => 'React'
            ],
            [
                'icon_path' => '',
                'name' => 'Firebase'
            ],
            [
                'icon_path' => '',
                'name' => 'SASS'
            ]
        ]
    ]
];

?>

<div class="projects slide-right">
    <h1 class="title">These are some projects I've worked on.</h1>
    <div class="separator"></div>

    <div class="projects__list">
        <?php foreach ($projects as $key => $project) : ?>

            <div class="projectItem">
                <div class="projectItem__sides">
                    <img src="<?= $project['image_path']; ?>" alt="">

                    <div class="projectItem__text">
                        <div>
                            <h2><?= $project['title']; ?></h2>
                            <p><?= $project['description']; ?></p>
                        </div>

                        <ul class="projectItem_tech">
                            <? foreach ($projects[$key]['tech'] as $project_tech) : ?>

                                <li><img src="<?= $project_tech['icon_path']; ?>" alt=""> <?= $project_tech['name']; ?></li>

                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>