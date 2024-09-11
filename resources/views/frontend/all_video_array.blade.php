<?php

class all_videos {

    function get_video_details($youtube_id) {

        $video11 = $this->all_latest_videos();
        $video1 = $this->unknown_list_videos();
        $video2 = $this->list_of_main_side_videos();
        $video3 = $this->racism_in_islam_videos();
        $video4 = $this->day_of_judgement_videos();
        $video5 = $this->life_the_barzakh_prophet_videos();
        $video6 = $this->life_story_of_prophet_videos();
        $video7 = $this->stories_of_prophets_videos();
        $video8 = $this->eternal_life_videos();
        $video9 = $this->health_and_fitness_videos();
        $video10 = $this->featured_videos();

        foreach ($video11 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        foreach ($video1 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        foreach ($video2 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        foreach ($video3 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        foreach ($video4 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        foreach ($video5 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        foreach ($video6 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        foreach ($video7 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        foreach ($video8 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        foreach ($video9 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        foreach ($video10 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }

        return FALSE;
    }

    function unknown_list_videos() {
        return [
                [
                'video_id' => '00KjN4DCjt4',
                'video_title' => 'Who Wrote the Quran?',
            ],
                [
                'video_id' => 'PF6VPZsHDZQ',
                'video_title' => 'Rise of Islam',
                'video_views' => '314k',
            ],
                [
                'video_id' => 'PuUSCQHfVmw',
                'video_title' => 'Definition of Allah.',
                'video_views' => '179k',
            ],
                [
                'video_id' => '9GQ_5DefocI',
                'video_title' => 'The Message Full Movie',
                'video_views' => '3686k',
            ],
        ];
    }

    function list_of_main_side_videos() {
        return [
            // [
            //     'youtube_id' => 'rTQBjXWVYSg',
            //     'video_id' => 'rTQBjXWVYSg',
            //     'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
            //     'video_views' => '22',
            //     'video_star' => 5,
            //     'video_time' => "(11.19 min)",
            //     'time_ago' => '11 month ago'
            // ],
            //     [
            //     'youtube_id' => 'VvO7gqFRrmw', //need to check
            //     'video_id' => 'VvO7gqFRrmw',
            //     'video_title' => 'How to END Racism? - Amazing advice by Prophet Muhammad (s) - NEW 2020(09.13 min)',
            //     'video_views' => '17k',
            //     'video_star' => 5,
            //     'video_time' => "(11.19 min)",
            //     'time_ago' => '2 years ago'
            // ],
                [
                'youtube_id' => 'xUpxk4V_bF8',
                'video_id' => 'xUpxk4V_bF8',
                'video_title' => 'Former President Trump was rushed off stage after gunshots rang out | USA TODAY (01.30 min)',
                'video_views' => '4657',
                'video_star' => 5,
                'video_time' => "(01.30 min)",
                'time_ago' => '17 hours ago'
            ],
                [
                'youtube_id' => '1OSrPbwFjiM',
                'video_id' => '1OSrPbwFjiM',
                'video_title' => 'Trump survives assassination attempt during Pennsylvania rally (04.18 min)',
                'video_views' => '297154',
                'video_star' => 5,
                'video_time' => "(04.18 min)",
                'time_ago' => '6 hours ago'
            ],
                [
                'youtube_id' => 'iRHMvnPrhao',
                'video_id' => 'iRHMvnPrhao',
                'video_title' => 'Prophet Muhammad(pbuh)`s Last Sermon to Mankind(4.04 min)',
                'video_views' => '29k',
                'video_star' => 5,
                'video_time' => "(4.04 min)",
                'time_ago' => '11 years ago'
            ],
                [
                'youtube_id' => 'pCQ6sAso5ds',
                'video_id' => 'pCQ6sAso5ds',
                'video_title' => 'Malcolm X`s Letter from Hajj(4.48 min)',
                'video_views' => '1.1M',
                'video_star' => 5,
                'video_time' => "(4.04 min)",
                'time_ago' => '3 years ago'
            ],
        ];
    }

    function racism_in_islam_videos() {
        return [
                [
                'video_id' => 'VvO7gqFRrmw',
                'video_title' => "How to END Racism? - Amazing advice by Prophet Muhammad (s)",
                'video_image' => "img/recism.png",
                'video_time' => "(9.14 min)",
                'video_views' => '83',
                'video_star' => 5,
            ],
                [
                'video_id' => 'iRHMvnPrhao',
                'video_title' => "Prophet Muhammad(pbuh)'s Last Sermon to Mankind (s)",
                'video_image' => "https://i3.ytimg.com/vi/iRHMvnPrhao/hqdefault.jpg",
                'video_time' => "(4.04 min)",
                'video_views' => '83',
                'video_star' => 5,
            ],
                [
                'video_id' => 'pCQ6sAso5ds',
                'video_title' => "Malcolm X's Letter from Hajj",
                'video_image' => "",
                'video_time' => "(4.48 min)",
                'video_views' => '83',
                'video_star' => 5,
            ],
               [
               'video_id' => 'uD7euo7K5gM',
               'video_title' => "Siraj Wahhaj | Black Lives Matter | 14th Annual MAS-ICNA Convention",
               'video_image' => "",
               'video_time' => "(14.47 min)",
               'video_views' => '20k',
               'video_star' => 5,
           ],
        ];
    }

    function day_of_judgement_videos() {
        return [
                [
                'video_id' => '0v-niJwZ-5Q',
                'video_title' => "The Day of Judgement(Episode 1): Introduction",
                'video_image' => "https://i3.ytimg.com/vi/0v-niJwZ-5Q/3.jpg",
                'video_time' => "(55:22 min)",
                'video_views' => '43',
                'video_star' => 5,
            ],
                [
                'video_id' => 'RuKE3tawuck',
                'video_title' => "The Day of Judgement(Episode 2): Quranic Names of Judgement",
                'video_image' => "https://i3.ytimg.com/vi/RuKE3tawuck/1.jpg",
                'video_time' => "(1:04:56 hr)",
                'video_views' => '23',
                'video_star' => 5,
            ],
                [
                'video_id' => '7Hp-Gdyzd5w',
                'video_title' => "The Day of Judgement - Episode 3: The Blowing of The Trumpet",
                'video_image' => "https://i3.ytimg.com/vi/7Hp-Gdyzd5w/3.jpg",
                'video_time' => "(59:54 min)",
                'video_views' => '56',
                'video_star' => 5,
            ],
               [
               'video_id' => 'h4_1JRcU65I',
               'video_title' => "The Day of Judgement | Episode 4: Do The Angels Die?",
               'video_image' => "https://i3.ytimg.com/vi/h4_1JRcU65I/maxresdefault.jpg",
               'video_time' => "(52:42 min)",
               'video_views' => '56',
               'video_star' => 5,
           ],
        ];
    }

    function life_the_barzakh_prophet_videos() {
        return [
                [
                'video_id' => 'kXX5MPMd_mc',
                'video_title' => "The Life in The Barzakh(The Soul)",
                'video_image' => "",
                'video_time' => "(1:00:46 hours)",
                'video_views' => '343',
                'video_star' => 5,
            ],
                [
                'video_id' => '_agssk2JqGA',
                'video_title' => "The Life in The Barzakh - Episode 2: Transitions of The Soul",
                'video_image' => "",
                'video_time' => "(1:03:39 hours)",
                'video_views' => '50',
                'video_star' => 5,
            ],
                [
                'video_id' => 'NDhHtJSJ4v0',
                'video_title' => "The Life in The Barzakh #3: The Angel of Death & The Trial of The Grave",
                'video_image' => "",
                'video_time' => "(1:04:49 hours)",
                'video_views' => '350',
                'video_star' => 5,
            ],
               [
               'video_id' => 'kXX5MPMd_mc',
               'video_title' => "The Life in The Barzakh(The Soul)",
               'video_image' => "",
               'video_time' => "(1:00:46 hours)",
               'video_views' => '153k',
               'video_star' => 5,
           ],
        ];
    }

    function life_story_of_prophet_videos() {
        return [
                [
                'video_id' => 'Wi0YV4-Zgq4',
                'video_title' => "Stages of Da'wah & Declaration of Prophethood",
                'video_image' => "",
                'video_time' => "(11:43 min)",
                'video_views' => '30',
                'video_star' => 5,
            ],
                [
                'video_id' => '0Y1jdNq3DFA',
                'video_title' => "Angel Jibreel Meets Muhammad Story Of Muhammad",
                'video_image' => "images/prophet_story_2.jpg",
                'video_time' => "(8:00 min)",
                'video_views' => '103',
                'video_star' => 5,
            ],
                [
                'video_id' => 'You9oHWT3Zk',
                'video_title' => "The Servant's Love for Muhammad SAW | Story of Prophet Muhammad SAW (S 1, Ep 7)",
                'video_image' => "images/prophet_story_3.jpg",
                'video_time' => "(5:59 min)",
                'video_views' => '103',
                'video_star' => 5,
            ],
               [
               'video_id' => 'lgpc322FAMA',
               'video_title' => "The Life in The Barzakh #4: The Fitnah of the Grave",
               'video_image' => "images/prophet_story_4.jpg",
               'video_time' => "(6:06 min)",
               'video_views' => '87',
               'video_star' => 5,
           ],
        ];
    }

    function stories_of_prophets_videos() {
        return [
                [
                'video_id' => 'NFwNYNKxqH8',
                'video_title' => "The Stories of the Prophets by Shaykh Dr. Yasir Qadhi | Know About the Prophets - Episode # 1",
                'video_image' => "",
                'video_time' => "(53:42 min)",
                'video_views' => '26',
                'video_star' => 5,
            ],
                [
                'video_id' => 'wjXVyxJ6S9s',
                'video_title' => "The Stories of the Prophets by Shaykh Dr. Yasir Qadhi | Know About the Prophets - Episode # 2",
                'video_image' => "",
                'video_time' => "(55:05 min)",
                'video_views' => '40',
                'video_star' => 5,
            ],
                [
                'video_id' => 'F0fiBraejZI',
                'video_title' => "The Stories of the Prophets by Shaykh Dr Yasir Qadhi - Episode # 2",
                'video_image' => "",
                'video_time' => "(54:45 min)",
                'video_views' => '3',
                'video_star' => 5,
            ],
            [
                'video_id' => 'RXPc6La75Ok',
                'video_title' => "The Stories of The Prophets | 3. The Difference Between a Prophet (Nabī) and a Messenger (Rasūl)",
                'video_image' => "",
                'video_time' => "(55:44 min)",
                'video_views' => '61k',
                'video_star' => 5,
            ],
               
        ];
    }

    function eternal_life_videos() {
        return [
                [
                'video_id' => 'LzwmRc86Yy8',
                'video_title' => "The Afterlife - Hamza Yusuf",
                'video_image' => "img/hereafter3.png",
                'video_time' => "(12:02 min)",
                'video_views' => '4',
                'video_star' => 5,
            ],
                [
                'video_id' => 'AmM0xhel1Y0',
                'video_title' => "A Journey Into the Hereafter - Part 1 of 2 - Ahmed Sidky",
                'video_image' => "img/hereafter_1.png",
                'video_time' => "(1:14:02 hours)",
                'video_views' => '4',
                'video_star' => 5,
            ],
                [
                'video_id' => 'TZ5a8XPoZ4A',
                'video_title' => "Journey into the Hearafter, Abdullah Hakim Quick 1 of 8",
                'video_image' => "img/hereafter4.png",
                'video_time' => "(10:14 minuits)",
                'video_views' => '4',
                'video_star' => 5,
            ],
               [
               'video_id' => 'yW9EoH-LJLU',
               'video_title' => "Journey into the Hearafter, Abdullah Hakim Quick 2 of 8",
               'video_image' => "img/hereafter4.png",
               'video_time' => "(10:14 minuits)",
               'video_views' => '55',
               'video_star' => 5,
           ],
        ];
    }

    function health_and_fitness_videos() {
        return [
                [
                'video_id' => 'V5x0I7ImaAU',
                'video_title' => "Relief Back Pain Exercises & Stretches By Dr Khalilur Rahman",
                'video_image' => "",
                'video_time' => "(on 5th Nov)",
                'video_views' => '190',
                'video_star' => 5,
            ],
                [
                'video_id' => '2M9cx1AyXgI',
                'video_title' => "How to Ease Neck Pain at Home or Office? Let’s walk with Dr. Khalil.",
                'video_image' => "",
                'video_time' => "(1:47 min)",
                'video_views' => '158',
                'video_star' => 5,
            ],
                [
                'video_id' => '_UWrP0Eka60',
                'video_title' => "Dr. Khalil case#1",
                'video_image' => "",
                'video_time' => "(06:03 min)",
                'video_views' => '95',
                'video_star' => 5,
            ],
               [
               'video_id' => 'VWy1bfpoCGg',
               'video_title' => "Dr. Khalil Case#2",
               'video_image' => "",
               'video_time' => "(03:06 min)",
               'video_views' => '110',
               'video_star' => 5,
           ],
        ];
    }

    function featured_videos() {
        return [
                [
                'video_id' => 'PuUSCQHfVmw',
                'video_title' => "Dr Zakir Naik - Definition of Allah in Islam.",
                'video_image' => "",
                'video_time' => "(13:22 minutes)",
                'video_views' => '4',
                'video_star' => 5,
            ],
                [
                'video_id' => 'UV3mFJRmoTw',
                'video_title' => "Do you REALLY worship one God? - Watch and find out!",
                'video_image' => "images/onegod1.png",
                'video_time' => "(3:38 minutes)",
                'video_views' => '4',
                'video_star' => 5,
            ],
                [
                'video_id' => 'pCuxnu_IGUk',
                'video_title' => "10 Reasons Why Jesus Is Not God!",
                'video_image' => "images/concept4.png",
                'video_time' => "(20:36 minutes)",
                'video_views' => '34',
                'video_star' => 5,
            ],
               [
               'video_id' => 'YW99U4JWNEc',
               'video_title' => "Top 10 Reasons Why Jesus is not God - Joshua Evans - TheDeenShow",
               'video_image' => "images/concept3.png",
               'video_time' => "(48:36 minutes)",
               'video_views' => '334',
               'video_star' => 5,
           ],
        ];
    }

    function latest_videos() {
        return array(
            [
                'youtube_id' => 'p30N7tOJ64g',
                'video_id' => 'p30N7tOJ64g',
                'video_title' => "Donald Trump is 'safe' after shots fired at rally - US Secret Service",
                'video_time' => "(04:13 min)",
                'video_views' => '360408',
                'video_star' => 5,
            ],
            [
                'youtube_id' => 'Sut9pcNvTUs',
                'video_id' => 'Sut9pcNvTUs',
                'video_title' => "Attacker at Donald Trump’s rally killed by US Secret Service sniper | BBC News",
                'video_time' => "(15:53 min)",
                'video_views' => '5191581',
                'video_star' => 4,
            ],
            // [
            //     'youtube_id' => 'IEqAc3zZkDg',
            //     'video_id' => 'IEqAc3zZkDg',
            //     'video_title' => "War on Gaza: UN confirms killing of first international staff in Rafah in Israeli ‘attack’",
            //     'video_time' => "(04:49 min)",
            //     'video_views' => '114k',
            //     'video_star' => 5,
            // ],
            // [
            //     'youtube_id' => 'NXWa-4m16X8',
            //     'video_id' => 'NXWa-4m16X8',
            //     'video_title' => "War on Gaza: Israeli forces push deeper into north and south of the strip",
            //     'video_time' => "(01:49 min)",
            //     'video_views' => '34k',
            //     'video_star' => 4,
            // ],
            [
                'youtube_id' => 'ai9a1SHPu7o',
                'video_id' => 'ai9a1SHPu7o',
                'video_title' => "ICJ LIVE: Top UN court holds hearing on Israel’s incursion into Rafah in Gaza",
                'video_time' => "(02:22:54 min)",
                'video_views' => '61k',
                'video_star' => 4,
            ],
            [
                'youtube_id' => 'zXcCqj5DZqk',
                'video_id' => 'zXcCqj5DZqk',
                'video_title' => "Palestinians flee Jabalia as Israeli military increase attacks on northern Gaza",
                'video_time' => "(01:16 min)",
                'video_views' => '10k',
                'video_star' => 4,
            ],
            [
                'youtube_id' => 'acqmZT_6cw0',
                'video_id' => 'acqmZT_6cw0',
                'video_title' => "Video appears to show suspected Trump shooter on a roof",
                'video_time' => "(06:56 min)",
                'video_views' => '1330752',
                'video_star' => 4,
            ],
            // [
            //     'youtube_id' => '4pmvJYsDeLY',
            //     'video_id' => '4pmvJYsDeLY',
            //     'video_title' => "What is the ‘Bilderberg Group’? | Decoded",
            //     'video_time' => "(16:02 min)",
            //     'video_views' => '3.6M',
            //     'video_star' => 4,
            // ],
            [
                'youtube_id' => 'PyYjppoc2t8',
                'video_id' => 'PyYjppoc2t8',
                'video_title' => "Israelis block aid bound for Gaza: Delivery trucks burnt and food aid destroyed",
                'video_time' => "(02:56 min)",
                'video_views' => '19k',
                'video_star' => 5,
            ],
            [
                'youtube_id' => 'PvM8QvkjL2M',
                'video_id' => 'PvM8QvkjL2M',
                'video_title' => "Pres. Biden delivers statement following possible assassination attempt on Donald Trump",
                'video_time' => "(05:50 min)",
                'video_views' => '2.5M',
                'video_star' => 5,
            ],
            [
                'youtube_id' => 'Aq60QWx54Pk',
                'video_id' => 'Aq60QWx54Pk',
                'video_title' => "American presidents are no strangers to assassination attempts | USA TODAY",
                'video_time' => "(01:20 min)",
                'video_views' => '1746',
                'video_star' => 5,
            ],
            // [
            //     'youtube_id' => 'EOFJJYVpR2w',
            //     'video_id' => 'EOFJJYVpR2w',
            //     'video_title' => "US students use graduation to stand with Palestine | Al Jazeera Newsfeed",
            //     'video_time' => "(02:16 min)",
            //     'video_views' => '37k',
            //     'video_star' => 5,
            // ],
            // [
            //     'youtube_id' => 'h8_YUAJs31M',
            //     'video_id' => 'h8_YUAJs31M',
            //     'video_title' => "Dutch faculty join student walkout after police cleared Amsterdam encampments | Al Jazeera Newsfeed",
            //     'video_time' => "(01:44 min)",
            //     'video_views' => '16k',
            //     'video_star' => 5,
            // ],
            [
                'youtube_id' => 'cYdBDl8zxTs',
                'video_id' => 'cYdBDl8zxTs',
                'video_title' => "I’m a professor who got fired and arrested for protesting Israel’s Gaza war | Close Up",
                'video_time' => "(08:55 min)",
                'video_views' => '40k',
                'video_star' => 5,
            ],
            //     [ //prev
            //     'youtube_id' => 'xTEfcmhNGTY',
            //     'video_id' => 'xTEfcmhNGTY',
            //     'video_title' => "Judgement day is comming soon",
            //     'video_time' => "(08:26 min)",
            //     'video_views' => '3',
            //     'video_star' => 5,
            // ],
            //     [
            //     'youtube_id' => '3bSksfUP5fE',
            //     'video_id' => '3bSksfUP5fE',
            //     'video_title' => "4 MIND BLOWING Miracles Of Prophet Muhammad",
            //     'video_time' => "(06:01 min)",
            //     'video_views' => '58',
            //     'video_star' => 5,
            // ],
            //     [
            //     'youtube_id' => 'npuBQXAAJqc',
            //     'video_id' => 'npuBQXAAJqc',
            //     'video_title' => "BEAUTIFUL ISLAMIC VIDEO EVER",
            //     'video_time' => "(09:35 min)",
            //     'video_views' => '7',
            //     'video_star' => 5,
            // ],
            //     [
            //     'youtube_id' => '3N1j7ha-h18',
            //     'video_id' => '3N1j7ha-h18',
            //     'video_title' => "When The Dead Are Resurrected Spoken Word Poetry 2",
            //     'video_time' => "(06:19 min)",
            //     'video_views' => '5',
            //     'video_star' => 5,
            // ],
            //     [
            //     'youtube_id' => 'eSlC-bohZkM',
            //     'video_id' => 'eSlC-bohZkM',
            //     'video_title' => "4 QUALITIES OF 70,000 MUSLIMS MUHAMMAD ? PREDICTED!",
            //     'video_time' => "(08:26 min)",
            //     'video_views' => '14',
            //     'video_star' => 5,
            // ],
            //     [
            //     'youtube_id' => 'B_Kr8YntsaI',
            //     'video_id' => 'B_Kr8YntsaI',
            //     'video_title' => "Death Is Not The End! Spoken Word Poetry",
            //     'video_time' => "(07:39 min)",
            //     'video_views' => '22',
            //     'video_star' => 5,
            // ],
            //     [
            //     'youtube_id' => 'cE6gHh8rcHY',
            //     'video_id' => 'cE6gHh8rcHY',
            //     'video_title' => "Amazing Hadith of Prophet ?",
            //     'video_time' => "(2:48 min)",
            //     'video_views' => '22',
            //     'video_star' => 5,
            // ],
            //     [
            //     'youtube_id' => 'qJsVI-Df5Hs',
            //     'video_id' => 'qJsVI-Df5Hs',
            //     'video_title' => "Beautiful Recitation Of Sura Fatiha By Hafez Maolana Nurul Islam Chowdhury",
            //     'video_time' => "(0:58 min)",
            //     'video_views' => '232',
            //     'video_star' => 5,
            // ],
            //     [
            //     'youtube_id' => '7P7ze7NLtls',
            //     'video_id' => '7P7ze7NLtls',
            //     'video_title' => "He Wanted To Kill MUHAMMAD ? {EMOTIONAL}",
            //     'video_time' => "(18:33 min)",
            //     'video_views' => '101',
            //     'video_star' => 5,
            // ],
        );
    }

    function all_latest_videos() {
        return array(
                [
                'video_id' => 'xTEfcmhNGTY',
                'video_title' => "Judgement day is comming soon",
                'video_time' => "(08:26 min)",
                'video_views' => '3',
                'video_star' => 5,
            ],
                [
                'video_id' => '3bSksfUP5fE',
                'video_title' => "4 MIND BLOWING Miracles Of Prophet Muhammad",
                'video_time' => "(06:01 min)",
                'video_views' => '58',
                'video_star' => 5,
            ],
                [
                'video_id' => 'npuBQXAAJqc',
                'video_title' => "BEAUTIFUL ISLAMIC VIDEO EVER",
                'video_time' => "(09:35 min)",
                'video_views' => '7',
                'video_star' => 5,
            ],
                [
                'video_id' => '3N1j7ha-h18',
                'video_title' => "When The Dead Are Resurrected Spoken Word Poetry 2",
                'video_time' => "(06:19 min)",
                'video_views' => '5',
                'video_star' => 5,
            ],
                [
                'video_id' => 'eSlC-bohZkM',
                'video_title' => "4 QUALITIES OF 70,000 MUSLIMS MUHAMMAD ? PREDICTED!",
                'video_time' => "(08:26 min)",
                'video_views' => '14',
                'video_star' => 5,
            ],
                [
                'video_id' => 'B_Kr8YntsaI',
                'video_title' => "Death Is Not The End! Spoken Word Poetry",
                'video_time' => "(07:39 min)",
                'video_views' => '22',
                'video_star' => 5,
            ],
                [
                'video_id' => 'cE6gHh8rcHY',
                'video_title' => "Amazing Hadith of Prophet ?",
                'video_time' => "(2:48 min)",
                'video_views' => '22',
                'video_star' => 5,
            ],
                [
                'video_id' => 'qJsVI-Df5Hs',
                'video_title' => "Beautiful Recitation Of Sura Fatiha By Hafez Maolana Nurul Islam Chowdhury",
                'video_time' => "(0:58 min)",
                'video_views' => '232',
                'video_star' => 5,
            ],
                [
                'video_id' => '7P7ze7NLtls',
                'video_title' => "He Wanted To Kill MUHAMMAD ? {EMOTIONAL}",
                'video_time' => "(18:33 min)",
                'video_views' => '101',
                'video_star' => 5,
            ],
                [
                'video_id' => 'EBXD-E9972o',
                'video_title' => "I Never Met Anyone More Beautiful? Than Him ? | How Was Prophet Muhammad ? Look Like",
                'video_time' => "(06:50 minutes)",
                'video_views' => '18',
                'video_star' => 5,
            ],
                [
                'video_id' => 'dFYPOPGhoRA',
                'video_title' => "Emotional True Story - When The Cleaner Of The Prophet's Masjid Passed Away",
                'video_time' => "(02:21 minutes)",
                'video_views' => '13',
                'video_star' => 5,
            ],
                [
                'video_id' => 'WOYVhZT45Y0',
                'video_title' => "Emotional Story Of Prophet Muhammad PBUH, UMAR RA & THE PRIEST!",
                'video_time' => "(07:32 minutes)",
                'video_views' => '13',
                'video_star' => 5,
            ],
                [
                'video_id' => 'GOoVIj_9P8c',
                'video_title' => "Story Of Prophet Muhammad | Cute stories of children around Muhammad PBUH(07:21 minutes)",
                'video_time' => "(07:21 minutes)",
                'video_views' => '6',
                'video_star' => 5,
            ],
                [
                'video_id' => '_IgSRSkxItk',
                'video_title' => "Story Of Muhammad PBUH |The Night Journey Al Isra Wal Miraj(36:58 minutes)",
                'video_time' => "(36:58 minutes)",
                'video_views' => '3',
                'video_star' => 5,
            ],
                [
                'video_id' => '8260wdtOfV8',
                'video_title' => "The Story of Prophet Muhammad's (PBUH) Mission to Taif(20:51 minutes)",
                'video_time' => "(20:51 minutes)",
                'video_views' => '9',
                'video_star' => 5,
            ],
                [
                'video_id' => 'eEliCW5aoac',
                'video_title' => "Look At Yourself To Find The Truth Of Quran - Mufti Menk(01:03 minutes)",
                'video_time' => "(20:51 minutes)",
                'video_views' => '5',
                'video_star' => 5,
            ],
                [
                'video_id' => '1yqV08dtyJ4',
                'video_title' => "Loving Others | Islamic Shorts(01:01 minutes)",
                'video_time' => "(20:51 minutes)",
                'video_views' => '4',
                'video_star' => 5,
            ],
                [
                'video_id' => 'QnP_OFXf89Q',
                'video_title' => "Story of Prophet Muhammad PBUH | The Miraculous Hijrah(50:06 minutes)",
                'video_time' => "(20:51 minutes)",
                'video_views' => '8',
                'video_star' => 5,
            ],
                [
                'video_id' => 'iQ9w3wpC0oY',
                'video_title' => "James Webb Telescope Discovers Just a Droplet! | Mufti Menk(04:59 minutes)",
                'video_time' => "(20:51 minutes)",
                'video_views' => '37',
                'video_star' => 5,
            ],
                [
                'video_id' => 'OdLo2eUn5F0',
                'video_title' => "Prophet Muhammad's Advice To Businessmen | Story Of Muhammad ?(07:21 minutes)",
                'video_time' => "(20:51 minutes)",
                'video_views' => '4',
                'video_star' => 5,
            ],
                [
                'video_id' => 'wvjSK5qsE1c',
                'video_title' => "Story Of Muhammad ? | The Prophet ? Pranks Abu Hurayrah(10:47 minutes)",
                'video_time' => "(20:51 minutes)",
                'video_views' => '11',
                'video_star' => 5,
            ],
                [
                'video_id' => 'Br1iHXbIiwk',
                'video_title' => "Allah Says about Loving Others(01:01 minutes)",
                'video_time' => "(20:51 minutes)",
                'video_views' => '7',
                'video_star' => 5,
            ],
                [
                'video_id' => '9VHkIx9Omq0',
                'video_title' => "What Allah Says About People's Heart Become Rusted (36 Seconds)",
                'video_time' => "(20:51 minutes)",
                'video_views' => '2,835',
                'video_star' => 5,
            ],
                [
                'video_id' => '8T4oC8jcu4M',
                'video_title' => 'Changing Of Qibla | When Prophet ? Asked Angel Jibreel(07:26 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '7',
                'video_star' => 5,
            ],
                [
                'video_id' => 'mYQ1cfzITHg',
                'video_title' => 'They Gave Half Of Their Wealth In Charity! Story Of Muhammad ?(15:15 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '6',
                'video_star' => 5,
            ],
                [
                'video_id' => 'UbL80_JtK_k',
                'video_title' => 'When The Prophet ? Arrived In Madeenah Story Of Muhammad ?(19:52 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '7',
                'video_star' => 5,
            ],
                [
                'video_id' => '66wTUHR12fI',
                'video_title' => 'Too Lazy To Pray - You Will Never Miss Salah After Watching This(03:26 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '5',
                'video_star' => 5,
            ],
                [
                'video_id' => 'JZKNo2Z_aew',
                'video_title' => '2 Angels Will Kick Dajjal Out From This Place! Story Of Muhammad ?(12:03 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '5',
                'video_star' => 5,
            ],
                [
                'video_id' => 'hpYBQpO2rhs',
                'video_title' => 'The Stories Of Miracles By Muhammad ? - Special Stories(09:27 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '9',
                'video_star' => 5,
            ],
                [
                'video_id' => 'MoE-CrV1x88',
                'video_title' => 'When Satan Iblis Tried To Kill Muhammad ? | Story Of Muhammad ?(13:16 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '16',
                'video_star' => 5,
            ],
                [
                'video_id' => 'Zqz6ZnodKvY',
                'video_title' => 'Amazing Stories Of Companions Of Prophet Muhammad | Story Of Muhammad (?)(10:25 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '39',
                'video_star' => 5,
            ],
                [
                'video_id' => '2SDm5Q8j1DA',
                'video_title' => 'When Shaytan Revealed Himself | Story of Prophet Muhammad (?)(15:27 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '7',
                'video_star' => 5,
            ],
                [
                'video_id' => 'e-yv6Ts56No',
                'video_title' => 'The Fall Of The Persian Empire | Story Of Muhammad ?(10:53 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '67',
                'video_star' => 5,
            ],
                [
                'video_id' => 'rTQBjXWVYSg',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '8',
                'video_star' => 5,
            ],
                [
                'video_id' => 'SGTYRjgPO4o',
                'video_title' => 'When Muhammad Met Allah | Story Of Muhammad EP 18 (14.19 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '23',
                'video_star' => 5,
            ],
                [
                'video_id' => 'dimidkpcBQs',
                'video_title' => 'True Story for Believers - When The Heavens Opened Up EP 17 (11.39 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '1027',
                'video_star' => 5,
            ],
                [
                'video_id' => 'XKAYnC8CugU',
                'video_title' => 'The Night Of The Jinn | Story of Prophet Muhammad - Powerful True Story EP 16 (10.05 minutes)',
                'video_time' => "(20:51 minutes)",
                'video_views' => '14',
                'video_star' => 5,
            ],
                [
                'video_id' => '2IYpZCgqrY8',
                'video_title' => 'When Prophet Muhammad Sandals Were Soaked With Blood EP 15 (9.41 minutes)',
                'video_time' => "(9.41 minutes)",
                'video_views' => '15',
                'video_star' => 5,
            ],
                [
                'video_id' => 'WxDG83gNF6c',
                'video_title' => 'When Khadeejah Passed Away | Story Of Muhammad EP14 (5.45 minutes)',
                'video_time' => "(5.45 minutes)",
                'video_views' => '9',
                'video_star' => 5,
            ],
                [
                'video_id' => '4lbWgLiqqrU',
                'video_title' => 'When They Boycotted The Prophet Story Of Muhammad Dr Yasir Qadhi - EP 13 (7.29 minutes)',
                'video_time' => "(7.29 minutes)",
                'video_views' => '14',
                'video_star' => 5,
            ],
                [
                'video_id' => 'FSDPbs1c9rU',
                'video_title' => 'When Hamza and Umar Converted To Islam | Story of Muhammad | EP-12 (13.12 minutes)',
                'video_time' => "(13.12 minutes)",
                'video_views' => '12',
                'video_star' => 5,
            ],
                [
                'video_id' => 'D7hd8nGpPV4',
                'video_title' => 'Muslim fled from the persecution 1st time-EP 11 | Story Of Muhammad (20.01 minutes)',
                'video_time' => "(20.01 minutes)",
                'video_views' => '32',
                'video_star' => 5,
            ],
                [
                'video_id' => 'yrn5rj0OHc4',
                'video_title' => 'When They Attacked The Prophet ﷺ Story Of Muhammad ﷺ | EP: 10 (11.14 minutes)',
                'video_time' => "(11.14 minutes)",
                'video_views' => '75',
                'video_star' => 5,
            ],
                [
                'video_id' => 'Wi0YV4-Zgq4',
                'video_title' => "Stages of Da'wah & Declaration of Prophethood (11.43 minutes)",
                'video_time' => "(11.43 minutes)",
                'video_views' => '20',
                'video_star' => 5,
            ],
                [
                'video_id' => '0Y1jdNq3DFA',
                'video_image' => "images/prophet_story_2.jpg",
                'video_title' => "Angel Jibreel Meets Muhammad ﷺ | Story Of Muhammad (8.00 minutes)",
                'video_time' => "(8.00 minutes)",
                'video_views' => '102',
                'video_star' => 5,
            ],
        );
    }

    function server_latest_videos_bck() {
        return [
                [
                'video_id' => '1.mp4',
                'video_title' => '2 BEAUTIFUL SAHABAH STORIES THAT WILL MAKE YOU LAUGH _ CRY! (53.54 minuits)',
                'video_views' => '314k',
                'video_img' => 'video_1.jpg',
                'video_star' => 5,
                'video_time' => "(08:26 minutes)",
                'time_ago' => '1 min ago'
            ],
                [
                'video_id' => '2.mp4',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
                'video_views' => '166',
                'video_img' => 'video_2.jpg',
                'video_star' => 5,
                'video_time' => "(48:26 minutes)",
                'time_ago' => '5 mins ago'
            ],
                [
                'video_id' => '3.mp4',
                'video_title' => 'Dr Zakir Naik - Definition of Allah in Islam. (13.23 minuits)',
                'video_views' => '179k',
                'video_img' => 'video_3.jpg',
                'video_star' => 5,
                'video_time' => "(12:26 minutes)",
                'time_ago' => '5 mins ago'
            ],
                [
                'video_id' => '4.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_4.jpg',
                'video_star' => 5,
                'video_time' => "(23:26 minutes)",
                'time_ago' => '10 mins ago'
            ],
                [
                'video_id' => '5.mp4',
                'video_title' => 'Prophet Muhammad and rise of Islam full PBS Documentary (53.54 minuits)',
                'video_views' => '314k',
                'video_img' => 'video_5.jpg',
                'video_star' => 5,
                'video_time' => "(28:66 minutes)",
                'time_ago' => '10 mins ago'
            ],
                [
                'video_id' => '6.mp4',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
                'video_views' => '166',
                'video_img' => 'video_6.jpg',
                'video_star' => 5,
                'video_time' => "(06:22 minutes)",
                'time_ago' => '15 mins ago'
            ],
                [
                'video_id' => '7.mp4',
                'video_title' => 'Dr Zakir Naik - Definition of Allah in Islam. (13.23 minuits)',
                'video_views' => '179k',
                'video_img' => 'video_7.jpg',
                'video_star' => 5,
                'video_time' => "(45:26 minutes)",
                'time_ago' => '1 hour ago'
            ],
                [
                'video_id' => '8.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_8.jpg',
                'video_star' => 5,
                'video_time' => "(38:26 minutes)",
                'time_ago' => '1 hour ago'
            ],
                [
                'video_id' => '1.mp4',
                'video_title' => '2 BEAUTIFUL SAHABAH STORIES THAT WILL MAKE YOU LAUGH _ CRY! (53.54 minuits)',
                'video_views' => '314k',
                'video_img' => 'video_1.jpg',
                'video_star' => 5,
                'video_time' => "(08:26 minutes)",
                'time_ago' => '1 hour ago'
            ],
                [
                'video_id' => '2.mp4',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
                'video_views' => '166',
                'video_img' => 'video_2.jpg',
                'video_star' => 5,
                'video_time' => "(48:26 minutes)",
                'time_ago' => '1 hour ago'
            ],
                [
                'video_id' => '3.mp4',
                'video_title' => 'Dr Zakir Naik - Definition of Allah in Islam. (13.23 minuits)',
                'video_views' => '179k',
                'video_img' => 'video_3.jpg',
                'video_star' => 5,
                'video_time' => "(12:26 minutes)",
                'time_ago' => '5 hours ago'
            ],
                [
                'video_id' => '4.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_4.jpg',
                'video_star' => 5,
                'video_time' => "(23:26 minutes)",
                'time_ago' => '5 hours ago'
            ],
                [
                'video_id' => '5.mp4',
                'video_title' => 'Prophet Muhammad and rise of Islam full PBS Documentary (53.54 minuits)',
                'video_views' => '314k',
                'video_img' => 'video_5.jpg',
                'video_star' => 5,
                'video_time' => "(28:66 minutes)",
                'time_ago' => '15 hours ago'
            ],
                [
                'video_id' => '6.mp4',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
                'video_views' => '166',
                'video_img' => 'video_6.jpg',
                'video_star' => 5,
                'video_time' => "(06:22 minutes)",
                'time_ago' => '1 Month ago'
            ],
                [
                'video_id' => '7.mp4',
                'video_title' => 'Dr Zakir Naik - Definition of Allah in Islam. (13.23 minuits)',
                'video_views' => '179k',
                'video_img' => 'video_7.jpg',
                'video_star' => 5,
                'video_time' => "(45:26 minutes)",
                'time_ago' => '1 Month ago'
            ],
                [
                'video_id' => '8.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_8.jpg',
                'video_star' => 5,
                'video_time' => "(38:26 minutes)",
                'time_ago' => '1 Month ago'
            ],
                [
                'video_id' => '1.mp4',
                'video_title' => '2 BEAUTIFUL SAHABAH STORIES THAT WILL MAKE YOU LAUGH _ CRY! (53.54 minuits)',
                'video_views' => '314k',
                'video_img' => 'video_1.jpg',
                'video_star' => 5,
                'video_time' => "(08:26 minutes)",
                'time_ago' => '2 Months ago'
            ],
                [
                'video_id' => '2.mp4',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
                'video_views' => '166',
                'video_img' => 'video_2.jpg',
                'video_star' => 5,
                'video_time' => "(48:26 minutes)",
                'time_ago' => '2 Months ago'
            ],
                [
                'video_id' => '3.mp4',
                'video_title' => 'Dr Zakir Naik - Definition of Allah in Islam. (13.23 minuits)',
                'video_views' => '179k',
                'video_img' => 'video_3.jpg',
                'video_star' => 5,
                'video_time' => "(12:26 minutes)",
                'time_ago' => '2 Months ago'
            ],
                [
                'video_id' => '4.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_4.jpg',
                'video_star' => 5,
                'video_time' => "(23:26 minutes)",
                'time_ago' => '2 Months ago'
            ],
                [
                'video_id' => '5.mp4',
                'video_title' => 'Prophet Muhammad and rise of Islam full PBS Documentary (53.54 minuits)',
                'video_views' => '314k',
                'video_img' => 'video_5.jpg',
                'video_star' => 5,
                'video_time' => "(28:66 minutes)",
                'time_ago' => '2 Months ago'
            ],
                [
                'video_id' => '6.mp4',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
                'video_views' => '166',
                'video_img' => 'video_6.jpg',
                'video_star' => 5,
                'video_time' => "(06:22 minutes)",
                'time_ago' => '3 Months ago'
            ],
                [
                'video_id' => '7.mp4',
                'video_title' => 'Dr Zakir Naik - Definition of Allah in Islam. (13.23 minuits)',
                'video_views' => '179k',
                'video_img' => 'video_7.jpg',
                'video_star' => 5,
                'video_time' => "(45:26 minutes)",
                'time_ago' => '3 Months ago'
            ],
                [
                'video_id' => '8.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_8.jpg',
                'video_star' => 5,
                'video_time' => "(38:26 minutes)",
                'time_ago' => '3 Months ago'
            ],
                [
                'video_id' => '1.mp4',
                'video_title' => '2 BEAUTIFUL SAHABAH STORIES THAT WILL MAKE YOU LAUGH _ CRY! (53.54 minuits)',
                'video_views' => '314k',
                'video_img' => 'video_1.jpg',
                'video_star' => 5,
                'video_time' => "(08:26 minutes)",
                'time_ago' => '5 Months ago'
            ],
                [
                'video_id' => '2.mp4',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
                'video_views' => '166',
                'video_img' => 'video_2.jpg',
                'video_star' => 5,
                'video_time' => "(48:26 minutes)",
                'time_ago' => '5 Months ago'
            ],
                [
                'video_id' => '3.mp4',
                'video_title' => 'Dr Zakir Naik - Definition of Allah in Islam. (13.23 minuits)',
                'video_views' => '179k',
                'video_img' => 'video_3.jpg',
                'video_star' => 5,
                'video_time' => "(12:26 minutes)",
                'time_ago' => '6 Months ago'
            ],
                [
                'video_id' => '4.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_4.jpg',
                'video_star' => 5,
                'video_time' => "(23:26 minutes)",
                'time_ago' => '6 Months ago'
            ],
                [
                'video_id' => '5.mp4',
                'video_title' => 'Prophet Muhammad and rise of Islam full PBS Documentary (53.54 minuits)',
                'video_views' => '314k',
                'video_img' => 'video_5.jpg',
                'video_star' => 5,
                'video_time' => "(28:66 minutes)",
                'time_ago' => '6 Months ago'
            ],
                [
                'video_id' => '6.mp4',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
                'video_views' => '166',
                'video_img' => 'video_6.jpg',
                'video_star' => 5,
                'video_time' => "(06:22 minutes)",
                'time_ago' => '6 Months ago'
            ],
                [
                'video_id' => '7.mp4',
                'video_title' => 'Dr Zakir Naik - Definition of Allah in Islam. (13.23 minuits)',
                'video_views' => '179k',
                'video_img' => 'video_7.jpg',
                'video_star' => 5,
                'video_time' => "(45:26 minutes)",
                'time_ago' => '6 Months ago'
            ],
                [
                'video_id' => '8.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_8.jpg',
                'video_star' => 5,
                'video_time' => "(38:26 minutes)",
                'time_ago' => '6 Months ago'
            ],
                [
                'video_id' => '1.mp4',
                'video_title' => '2 BEAUTIFUL SAHABAH STORIES THAT WILL MAKE YOU LAUGH _ CRY! (53.54 minuits)',
                'video_views' => '314k',
                'video_img' => 'video_1.jpg',
                'video_star' => 5,
                'video_time' => "(08:26 minutes)",
                'time_ago' => '6 Months ago'
            ],
                [
                'video_id' => '2.mp4',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
                'video_views' => '166',
                'video_img' => 'video_2.jpg',
                'video_star' => 5,
                'video_time' => "(48:26 minutes)",
                'time_ago' => '6 Months ago'
            ],
                [
                'video_id' => '3.mp4',
                'video_title' => 'Dr Zakir Naik - Definition of Allah in Islam. (13.23 minuits)',
                'video_views' => '179k',
                'video_img' => 'video_3.jpg',
                'video_star' => 5,
                'video_time' => "(12:26 minutes)",
                'time_ago' => '8 Months ago'
            ],
                [
                'video_id' => '4.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_4.jpg',
                'video_star' => 5,
                'video_time' => "(23:26 minutes)",
                'time_ago' => '8 Months ago'
            ],
                [
                'video_id' => '5.mp4',
                'video_title' => 'Prophet Muhammad and rise of Islam full PBS Documentary (53.54 minuits)',
                'video_views' => '314k',
                'video_img' => 'video_5.jpg',
                'video_star' => 5,
                'video_time' => "(28:66 minutes)",
                'time_ago' => '8 Months ago'
            ],
                [
                'video_id' => '6.mp4',
                'video_title' => 'The Woman Who Challenged Firaun | Story Of Muhammad EP 19 (11.19 min)',
                'video_views' => '166',
                'video_img' => 'video_6.jpg',
                'video_star' => 5,
                'video_time' => "(06:22 minutes)",
                'time_ago' => '8 Months ago'
            ],
                [
                'video_id' => '7.mp4',
                'video_title' => 'Dr Zakir Naik - Definition of Allah in Islam. (13.23 minuits)',
                'video_views' => '179k',
                'video_img' => 'video_7.jpg',
                'video_star' => 5,
                'video_time' => "(45:26 minutes)",
                'time_ago' => '8 Months ago'
            ],
                [
                'video_id' => '8.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_8.jpg',
                'video_star' => 5,
                'video_time' => "(38:26 minutes)",
                'time_ago' => '8 Months ago'
            ],
                [
                'video_id' => 'big_buck_bunny_720p_5mb.mp4',
                'video_title' => 'THE MESSAGE - THE STORY OF ISLAM (2.58.20 hours)',
                'video_views' => '3686k',
                'video_img' => 'video_8.jpg',
                'video_star' => 5,
                'video_time' => "(38:26 minutes)",
                'time_ago' => '1 Month ago'
            ],
        ];
    }

    function server_latest_videos() {
        return [
                [
                'youtube_id' => '3bSksfUP5fE',
                'video_id' => '1.mp4',
                'video_title' => '4 MIND BLOWING Miracles Of Prophet Muhammad ﷺ(6:01 minutes)',
                'video_views' => '314k',
                'video_img' => 'video_1.jpg',
                'video_star' => 5,
                'video_time' => "(6:01 minutes)",
                'time_ago' => '1 min ago'
            ],
                [
                'youtube_id' => 'npuBQXAAJqc',
                'video_id' => '2.mp4',
                'video_title' => 'BEAUTIFUL ISLAMIC VIDEO EVER(9:35 minutes)',
                'video_views' => '114k',
                'video_img' => 'video_2.jpg',
                'video_star' => 5,
                'video_time' => "(9:35 minutes)",
                'time_ago' => '1 month ago'
            ],
                [
                'youtube_id' => 'cE6gHh8rcHY',
                'video_id' => '3.mp4',
                'video_title' => 'Amazing Hadith of Prophet ﷺ(2:48 minutes)',
                'video_views' => '44k',
                'video_img' => 'video_3.jpg',
                'video_star' => 5,
                'video_time' => "(2:48 minutes)",
                'time_ago' => '2 months ago'
            ],
                [
                'youtube_id' => 'dFYPOPGhoRA',
                'video_id' => '4.mp4',
                'video_title' => 'Emotional True Story - When The Cleaner Of The Prophet’s Masjid Passed Away(2:21 minutes)',
                'video_views' => '14k',
                'video_img' => 'video_4.jpg',
                'video_star' => 5,
                'video_time' => "(2:21 minutes)",
                'time_ago' => '6 months ago'
            ],
                [
                'youtube_id' => 'OdLo2eUn5F0',
                'video_id' => '5.mp4',
                'video_title' => 'Prophet Muhammad`s Advice To Businessmen | Story Of Muhammad ﷺ(7:21 minutes)',
                'video_views' => '84k',
                'video_img' => 'video_5.jpg',
                'video_star' => 5,
                'video_time' => "(7:21 minutes)",
                'time_ago' => '8 months ago'
            ],
                [
                'youtube_id' => '8T4oC8jcu4M',
                'video_id' => '6.mp4',
                'video_title' => 'Changing Of Qibla | When Prophet ﷺ Asked Angel Jibreel(7:25 minutes)',
                'video_views' => '4k',
                'video_img' => 'video_6.jpg',
                'video_star' => 5,
                'video_time' => "(7:25 minutes)",
                'time_ago' => '10 months ago'
            ],
                [
                'youtube_id' => '2IYpZCgqrY8',
                'video_id' => '7.mp4',
                'video_title' => 'When Prophet Muhammad ﷺ Sandals Were Soaked With Blood - Powerful True Story | EP 15(9:41 minutes)',
                'video_views' => '23k',
                'video_img' => 'video_7.jpg',
                'video_star' => 5,
                'video_time' => "(9:41 minutes)",
                'time_ago' => '1 year ago'
            ],
                [
                'youtube_id' => 'WxDG83gNF6c',
                'video_id' => '8.mp4',
                'video_title' => 'When Khadeejah Passed Away | Story Of Muhammad ﷺ | EP14(5:45 minutes)',
                'video_views' => '23k',
                'video_img' => 'video_8.jpg',
                'video_star' => 5,
                'video_time' => "(5:45 minutes)",
                'time_ago' => '2 years ago'
            ],
                [
                'youtube_id' => '2IYpZCgqrY8',
                'video_id' => '7.mp4',
                'video_title' => 'When Prophet Muhammad ﷺ Sandals Were Soaked With Blood - Powerful True Story | EP 15(9:41 minutes)',
                'video_views' => '23k',
                'video_img' => 'video_7.jpg',
                'video_star' => 5,
                'video_time' => "(9:41 minutes)",
                'time_ago' => '1 year ago'
            ],
                [
                'youtube_id' => 'OdLo2eUn5F0',
                'video_id' => '5.mp4',
                'video_title' => 'Prophet Muhammad`s Advice To Businessmen | Story Of Muhammad ﷺ(7:21 minutes)',
                'video_views' => '84k',
                'video_img' => 'video_5.jpg',
                'video_star' => 5,
                'video_time' => "(7:21 minutes)",
                'time_ago' => '8 months ago'
            ],
                [
                'youtube_id' => '8T4oC8jcu4M',
                'video_id' => '6.mp4',
                'video_title' => 'Changing Of Qibla | When Prophet ﷺ Asked Angel Jibreel(7:25 minutes)',
                'video_views' => '4k',
                'video_img' => 'video_6.jpg',
                'video_star' => 5,
                'video_time' => "(7:25 minutes)",
                'time_ago' => '10 months ago'
            ],
                [
                'youtube_id' => 'WxDG83gNF6c',
                'video_id' => '8.mp4',
                'video_title' => 'When Khadeejah Passed Away | Story Of Muhammad ﷺ | EP14(5:45 minutes)',
                'video_views' => '23k',
                'video_img' => 'video_8.jpg',
                'video_star' => 5,
                'video_time' => "(5:45 minutes)",
                'time_ago' => '2 years ago'
            ],
                [
                'youtube_id' => '2IYpZCgqrY8',
                'video_id' => '7.mp4',
                'video_title' => 'When Prophet Muhammad ﷺ Sandals Were Soaked With Blood - Powerful True Story | EP 15(9:41 minutes)',
                'video_views' => '23k',
                'video_img' => 'video_7.jpg',
                'video_star' => 5,
                'video_time' => "(9:41 minutes)",
                'time_ago' => '1 year ago'
            ],
                [
                'youtube_id' => 'OdLo2eUn5F0',
                'video_id' => '5.mp4',
                'video_title' => 'Prophet Muhammad`s Advice To Businessmen | Story Of Muhammad ﷺ(7:21 minutes)',
                'video_views' => '84k',
                'video_img' => 'video_5.jpg',
                'video_star' => 5,
                'video_time' => "(7:21 minutes)",
                'time_ago' => '8 months ago'
            ],
                [
                'youtube_id' => 'WxDG83gNF6c',
                'video_id' => '8.mp4',
                'video_title' => 'When Khadeejah Passed Away | Story Of Muhammad ﷺ | EP14(5:45 minutes)',
                'video_views' => '23k',
                'video_img' => 'video_8.jpg',
                'video_star' => 5,
                'video_time' => "(5:45 minutes)",
                'time_ago' => '2 years ago'
            ],
                [
                'youtube_id' => '8T4oC8jcu4M',
                'video_id' => '6.mp4',
                'video_title' => 'Changing Of Qibla | When Prophet ﷺ Asked Angel Jibreel(7:25 minutes)',
                'video_views' => '4k',
                'video_img' => 'video_6.jpg',
                'video_star' => 5,
                'video_time' => "(7:25 minutes)",
                'time_ago' => '10 months ago'
            ],
        ];
    }

    function get_server_video_details($youtube_id) {
        $videos = $this->server_latest_videos();
        foreach ($videos as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }
        
        $video2 = $this->all_latest_videos();
        
        foreach ($video2 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }
        
        $video3 = $this->list_of_main_side_videos();
        foreach ($video3 as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_title'];
            }
        }
    }

    function get_server_video_img($youtube_id) {
        $videos = $this->server_latest_videos();
        foreach ($videos as $value) {
            if ($value['video_id'] == $youtube_id) {
                return $value['video_img'];
            }
        }
    }

}
