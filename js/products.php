<?php

  // クロスオリジンを許可する
  header( "Access-Control-Allow-Origin:*" );
  // ヘッダーにコンテンツの種類を設定する
  header( "Content-Type:application/json" );

$products = [
  [
    "year" => "2017",
    "thumbnail" => "img_thumbnail_01.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278595413_61006a7a89_k.jpg",
      "https://live.staticflickr.com/65535/51277688007_e888e35c28_k.jpg"
    ],
    "date" => "'17.9.10",
    "place" => "Nara park, Nara",
    "alt" => "奈良公園"
  ],
  [
    "year" => "2018",
    "thumbnail" => "img_thumbnail_02.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278606648_1982673b37_k.jpg",
      "https://live.staticflickr.com/65535/51279458380_3e90d3e1aa_k.jpg",
      "https://live.staticflickr.com/65535/51277687897_cb989d96ec_k.jpg"
    ],
    "date" => "'18.3.27",
    "place" => "Arashiyama, Kyoto",
    "alt" => "嵐山"
  ],
  [
    "year" => "2018",
    "thumbnail" => "img_thumbnail_03.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278606498_ff1d01cffc_k.jpg",
      "https://live.staticflickr.com/65535/51278606448_144e591eb4_k.jpg"
    ],
    "date" => "'18.3.27",
    "place" => "Toji, Kyoto",
    "alt" => "東寺"
  ],
  [
    "year" => "2018",
    "thumbnail" => "img_thumbnail_04.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279158994_d92cde811d_k.jpg",
      "https://live.staticflickr.com/65535/51277687777_1816e7021a_k.jpg"
    ],
    "date" => "'18.4.3",
    "place" => "Nara",
    "alt" => "奈良"
  ],
  [
    "year" => "2018",
    "thumbnail" => "img_thumbnail_05.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279155829_936392edb2_k.jpg",
      "https://live.staticflickr.com/65535/51279458230_61172a4766_k.jpg",
      "https://live.staticflickr.com/65535/51278606343_f171359b95_k.jpg",
      "https://live.staticflickr.com/65535/51279158879_79a263d29e_k.jpg",
      "https://live.staticflickr.com/65535/51278606313_fc3392f404_k.jpg"
    ],
    "date" => "'18.7.29",
    "place" => "Kamikochi, Nagano",
    "alt" => "上高地"
  ],
  [
    "year" => "2018",
    "thumbnail" => "img_thumbnail_06.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279458115_ab11c9afc4_k.jpg",
      "https://live.staticflickr.com/65535/51278437841_d744cbbe2d_k.jpg",
      "https://live.staticflickr.com/65535/51278437821_433586e23c_k.jpg",
      "https://live.staticflickr.com/65535/51278602973_cf2f115571_k.jpg",
      "https://live.staticflickr.com/65535/51278606158_7a33062a8f_k.jpg",
      "https://live.staticflickr.com/65535/51279158714_38d21393ce_k.jpg"
    ],
    "date" => "'18.8.31",
    "place" => "Toji, Kyoto",
    "alt" => "東寺"
  ],
  [
    "year" => "2018",
    "thumbnail" => "img_thumbnail_07.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279158684_fcc861f400_k.jpg",
      "https://live.staticflickr.com/65535/51279458015_69b3f9e7cc_k.jpg",
      "https://live.staticflickr.com/65535/51279457990_d15bb1e66c_k.jpg",
      "https://live.staticflickr.com/65535/51277687437_d8f1c5d656_k.jpg"
    ],
    "date" => "'18.11.24",
    "place" => "Hogonin, Kyoto",
    "alt" => "宝厳院"
  ],
  [
    "year" => "2018",
    "thumbnail" => "img_thumbnail_08.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51277687412_0fa9d30cbe_k.jpg"
    ],
    "date" => "'18.11.24",
    "place" => "Toji, Kyoto",
    "alt" => "東寺"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_09.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279457910_78cd39a8ee_k.jpg"
    ],
    "date" => "'19.3.5",
    "place" => "Kitanotemmangu, Kyoto",
    "alt" => "北野天満宮"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_10.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279158544_5db40cdb2a_k.jpg",
      "https://live.staticflickr.com/65535/51279457875_37c3b4f7c0_k.jpg",
      "https://live.staticflickr.com/65535/51279457850_033d0dad7d_k.jpg",
      "https://live.staticflickr.com/65535/51279457820_3275f8e297_k.jpg",
      "https://live.staticflickr.com/65535/51279158484_61faf4ee5f_k.jpg"
    ],
    "date" => "'19.4.5",
    "place" => "Byodoin, Kyoto",
    "alt" => "平等院"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_11.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278605908_fd98614286_k.jpg",
      "https://live.staticflickr.com/65535/51279158409_434083bd1d_k.jpg",
      "https://live.staticflickr.com/65535/51278437601_adcd40bc0d_k.jpg"
    ],
    "date" => "'19.4.5",
    "place" => "Nijojo, Kyoto",
    "alt" => "二条城"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_12.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279457715_87e631c065_k.jpg",
      "https://live.staticflickr.com/65535/51279457705_6c7db889bf_k.jpg",
      "https://live.staticflickr.com/65535/51279158329_424c35cda5_k.jpg",
      "https://live.staticflickr.com/65535/51279158314_0de8f244fc_k.jpg",
      "https://live.staticflickr.com/65535/51279457645_0693ad1e26_k.jpg"
    ],
    "date" => "'19.4.13",
    "place" => "Sanzenin, Kyoto",
    "alt" => "三千院"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_13.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279155749_bec3f62d88_k.jpg",
      "https://live.staticflickr.com/65535/51277687192_1c098d2a23_k.jpg"
    ],
    "date" => "'19.5.17",
    "place" => "My mother's roses",
    "alt" => "母の薔薇"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_14.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279457615_e657498a32_k.jpg",
      "https://live.staticflickr.com/65535/51277687182_62746e6999_k.jpg",
      "https://live.staticflickr.com/65535/51278605703_f6014b133e_k.jpg",
      "https://live.staticflickr.com/65535/51277687142_ab707d0e3c_k.jpg",
      "https://live.staticflickr.com/65535/51279457585_ec61ca4114_k.jpg",
      "https://live.staticflickr.com/65535/51278437336_341534201a_k.jpg",
      "https://live.staticflickr.com/65535/51279158159_e90f8d8d75_k.jpg",
      "https://live.staticflickr.com/65535/51278437266_3f285abb85_k.jpg"
    ],
    "date" => "'19.6.3",
    "place" => "Umeda, Osaka",
    "alt" => "梅田スナップ"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_15.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278437246_f5c668a9d8_k.jpg",
      "https://live.staticflickr.com/65535/51277687042_3e729f50f3_k.jpg",
      "https://live.staticflickr.com/65535/51279155744_d1a7a4242c_k.jpg"
    ],
    "date" => "'19.8.10",
    "place" => "なにわ淀川花火大会",
    "alt" => "なにわ淀川花火大会"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_16.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279457405_dedfa85410_k.jpg",
      "https://live.staticflickr.com/65535/51279158064_06bc61ca02_k.jpg",
      "https://live.staticflickr.com/65535/51279457350_3511878abb_k.jpg",
      "https://live.staticflickr.com/65535/51277686957_9efe78c19e_k.jpg",
      "https://live.staticflickr.com/65535/51279457295_f6f883550a_k.jpg"
    ],
    "date" => "'19.10.19",
    "place" => "Yanagawa, Fukuoka",
    "alt" => "柳川"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_17.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51277686917_4ed3c1c865_k.jpg",
      "https://live.staticflickr.com/65535/51279457260_26173bd0d4_k.jpg",
      "https://live.staticflickr.com/65535/51279157929_30f38e132c_k.jpg",
      "https://live.staticflickr.com/65535/51293283146_122b58b541_k.jpg"
    ],
    "date" => "'19.10.19",
    "place" => "Birthplace of Hakushu Kitahara, Fukuoka",
    "alt" => "北原白秋生家"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_18.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279157874_e14af5e8c1_k.jpg",
      "https://live.staticflickr.com/65535/51279157844_77f5af6cbf_k.jpg",
      "https://live.staticflickr.com/65535/51279457175_a4ecd19ea2_k.jpg",
      "https://live.staticflickr.com/65535/51278605243_380e1f77e5_k.jpg",
      "https://live.staticflickr.com/65535/51279457120_8c4701a9bc_k.jpg"
    ],
    "date" => "'19.10.20",
    "place" => "Nagasaki",
    "alt" => "長崎"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_19.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279457080_62353e6c6b_k.jpg",
      "https://live.staticflickr.com/65535/51279157739_6bf9020fd6_k.jpg",
      "https://live.staticflickr.com/65535/51279157709_3a81b553de_k.jpg",
      "https://live.staticflickr.com/65535/51278605133_4ab4ea0d34_k.jpg",
      "https://live.staticflickr.com/65535/51278605093_74abf6a937_k.jpg",
      "https://live.staticflickr.com/65535/51277686637_632f695336_k.jpg"
    ],
    "date" => "'19.10.21",
    "place" => "Mojiko, Fukuoka",
    "alt" => "門司港"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_20.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51277686617_ad2efb19c4_k.jpg",
      "https://live.staticflickr.com/65535/51278436761_a33c99bc15_k.jpg",
      "https://live.staticflickr.com/65535/51278604978_2266f5cd9b_k.jpg",
      "https://live.staticflickr.com/65535/51279456865_00cf6d3007_k.jpg",
      "https://live.staticflickr.com/65535/51278436666_17c283008e_k.jpg",
      "https://live.staticflickr.com/65535/51279157534_21143c8a8b_k.jpg"
    ],
    "date" => "'19.11.23",
    "place" => "Minoo, Osaka",
    "alt" => "箕面"
  ],
  [
    "year" => "2019",
    "thumbnail" => "img_thumbnail_21.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278604833_f5413805a2_k.jpg",
      "https://live.staticflickr.com/65535/51279456745_3fd636872a_k.jpg",
      "https://live.staticflickr.com/65535/51278604763_5081a172fb_k.jpg",
      "https://live.staticflickr.com/65535/51278436546_a9dfbaa5ac_k.jpg"
    ],
    "date" => "'19.11.26",
    "place" => "Toji, Kyoto",
    "alt" => "東寺"
  ],
  [
    "year" => "2020",
    "thumbnail" => "img_thumbnail_22.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279456690_7ec4eafa9c_k.jpg",
      "https://live.staticflickr.com/65535/51279456670_9c03884017_k.jpg",
      "https://live.staticflickr.com/65535/51277686342_ccf25f72f5_k.jpg"
    ],
    "date" => "'20.3.20",
    "place" => "Imperial theatre, Tokyo",
    "alt" => "帝国劇場"
  ],
  [
    "year" => "2020",
    "thumbnail" => "img_thumbnail_23.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278604643_b9ad16b445_k.jpg",
      "https://live.staticflickr.com/65535/51278436436_deac024773_k.jpg",
      "https://live.staticflickr.com/65535/51279157289_78a5f7cfae_k.jpg",
      "https://live.staticflickr.com/65535/51279157269_a9a0fc1bc4_k.jpg",
      "https://live.staticflickr.com/65535/51279456575_56fe6d7086_k.jpg",
      // "https://live.staticflickr.com/65535/51278436311_560a8cd8a7_k.jpg",
      // "https://live.staticflickr.com/65535/51278436311_560a8cd8a7_k.jpg"
    ],
    "date" => "'20.9.20",
    "place" => "Kurashiki City, Okayama",
    "alt" => "倉敷市"
  ],
  [
    "year" => "2020",
    "thumbnail" => "img_thumbnail_24.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51277686172_964fabd2ee_k.jpg",
      "https://live.staticflickr.com/65535/51278436226_441e7acda6_k.jpg",
      "https://live.staticflickr.com/65535/51277686102_46b2a0789b_k.jpg",
      "https://live.staticflickr.com/65535/51279157099_a9e1f15d9b_k.jpg",
      "https://live.staticflickr.com/65535/51278436136_b3ef56bc06_k.jpg"
    ],
    "date" => "'20.11.21",
    "place" => "Imagumakannonji-Sennyuji, Kyoto",
    "alt" => "今隈観音寺-泉涌寺"
  ],
  [
    "year" => "2020",
    "thumbnail" => "img_thumbnail_25.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278436106_5f6f7dc96a_k.jpg",
      "https://live.staticflickr.com/65535/51278604333_be8c107fd8_k.jpg"
      // "https://live.staticflickr.com/65535/51278604298_0576ecc1e4_k.jpg"
    ],
    "date" => "'20.11.28",
    "place" => "Eikando, Kyoto",
    "alt" => "永観堂"
  ],
  [
    "year" => "2020",
    "thumbnail" => "img_thumbnail_26.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279156974_7db137a592_k.jpg",
      "https://live.staticflickr.com/65535/51278436061_9071eeba4b_k.jpg",
      "https://live.staticflickr.com/65535/51277685972_5d221fffed_k.jpg",
      "https://live.staticflickr.com/65535/51278604193_19802c1732_k.jpg",
      "https://live.staticflickr.com/65535/51277685887_a2a3050b01_k.jpg",
      "https://live.staticflickr.com/65535/51278435921_7040db660e_k.jpg",
      "https://live.staticflickr.com/65535/51277685842_5d018c1253_k.jpg",
    ],
    "date" => "'20.12.25",
    "place" => "Huistenbosch, Nagasaki",
    "alt" => "ハウステンボス"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_27.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51279456200_3dbe580060_k.jpg",
      "https://live.staticflickr.com/65535/51279456190_85934d448e_k.jpg",
      "https://live.staticflickr.com/65535/51279156769_30b8b23c61_k.jpg",
      "https://live.staticflickr.com/65535/51277685757_aaed50c42f_k.jpg",
      "https://live.staticflickr.com/65535/51279456075_368046201a_k.jpg",
      "https://live.staticflickr.com/65535/51279456040_85d0545555_k.jpg",
      "https://live.staticflickr.com/65535/51278603828_9f3b7b0ce4_k.jpg",
      "https://live.staticflickr.com/65535/51278435716_2c91f57bc1_k.jpg",
      "https://live.staticflickr.com/65535/51278435661_86c4160ce6_k.jpg"
    ],
    "date" => "'21.3.29",
    "place" => "Ohmihachiman City, Shiga",
    "alt" => "近江八幡市"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_28.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278603773_e6f992c1ae_k.jpg",
      "https://live.staticflickr.com/65535/51279156514_e382b5ea6d_k.jpg",
      "https://live.staticflickr.com/65535/51278435586_c4efcd6aca_k.jpg",
      "https://live.staticflickr.com/65535/51279455835_62bcf84835_k.jpg",
      "https://live.staticflickr.com/65535/51277685512_e84e23085b_k.jpg",
      "https://live.staticflickr.com/65535/51279455790_eb746947a3_k.jpg"
    ],
    "date" => "'21.3.29",
    "place" => "Heianjingu, Kyoto",
    "alt" => "平安神宮"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_29.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51277685427_5f0f062bb3_k.jpg",
      "https://live.staticflickr.com/65535/51278603653_d7c6f20b90_k.jpg",
      "https://live.staticflickr.com/65535/51277685397_9d1ea76608_k.jpg",
      "https://live.staticflickr.com/65535/51278603613_c9d7f67c1e_k.jpg",
      "https://live.staticflickr.com/65535/51279156379_9ede576c16_k.jpg",
      "https://live.staticflickr.com/65535/51277684662_eedaedd9bc_k.jpg",
      // "https://live.staticflickr.com/65535/51279455680_dbb1ce4ce8_k.jpg",
      "https://live.staticflickr.com/65535/51279455670_9709713d66_k.jpg",
      "https://live.staticflickr.com/65535/51278435371_42d842bddf_k.jpg",
      "https://live.staticflickr.com/65535/51279156339_7f4716f082_k.jpg",
      // "https://live.staticflickr.com/65535/51278603533_390dbe2992_k.jpg",
      "https://live.staticflickr.com/65535/51292529792_46a3e92586_k.jpg",
      "https://live.staticflickr.com/65535/51294279335_08d27d9638_k.jpg",
      "https://live.staticflickr.com/65535/51278603518_30ae66facb_k.jpg",
    ],
    "date" => "'21.3.30",
    "place" => "Kiyomizudera, Kyoto",
    "alt" => "清水寺"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_30.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278435321_4a4c3b1d66_k.jpg",
      "https://live.staticflickr.com/65535/51279156274_9edf37826c_k.jpg",
      "https://live.staticflickr.com/65535/51278603443_751e9f3571_k.jpg",
      "https://live.staticflickr.com/65535/51278603433_55ceb31fcf_k.jpg",
      "https://live.staticflickr.com/65535/51279455495_b0e142ed94_k.jpg",
    ],
    "date" => "'21.3.31",
    "place" => "Yamatosaidaiji, Nara",
    "alt" => "大和西大寺"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_31.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51277684607_30bc556c00_k.jpg",
      "https://live.staticflickr.com/65535/51279156194_4d8a2b2309_k.jpg",
      // "https://live.staticflickr.com/65535/51278603353_8c7d1975c7_k.jpg",
      "https://live.staticflickr.com/65535/51278435116_77edb27e75_k.jpg",
      "https://live.staticflickr.com/65535/51278435076_092fef7f81_k.jpg",
      "https://live.staticflickr.com/65535/51278603258_5d7ee80fc3_k.jpg"
    ],
    "date" => "'21.4.3",
    "place" => "Yakushiji, Nara",
    "alt" => "薬師寺"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_32.jpeg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51278602838_34f48143fc_k.jpg",
      "https://live.staticflickr.com/65535/51278434996_246dfb0b4a_k.jpg",
      "https://live.staticflickr.com/65535/51277685022_d4a2e795e3_k.jpg",
      "https://live.staticflickr.com/65535/51279156044_3b975b2290_k.jpg",
      "https://live.staticflickr.com/65535/51279155994_157b27f189_k.jpg",
      "https://live.staticflickr.com/65535/51279155949_7015a64dbc_k.jpg",
      "https://live.staticflickr.com/65535/51279155929_ec9d17cd42_k.jpg",
      "https://live.staticflickr.com/65535/51278434831_648c1742ff_k.jpg",
      "https://live.staticflickr.com/65535/51278434821_58c171ad7e_k.jpg",
      "https://live.staticflickr.com/65535/51278434546_87c4bbe7a8_k.jpg"
    ],
    "date" => "'21.6.6",
    "place" => "Yokokuji, Kyoto",
    "alt" => "楊谷寺"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_33.jpg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51304363183_a8e07d4d3c_k.jpg",
      "https://live.staticflickr.com/65535/51304363143_88c61dd339_k.jpg",
      "https://live.staticflickr.com/65535/51303419602_7471c9cf9f_k.jpg",
      "https://live.staticflickr.com/65535/51305179370_fb5835825f_k.jpg"
    ],
    "date" => "'21.7.11",
    "place" => "Yasaka Koshindo",
    "alt" => "八坂庚申堂"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_34.jpg",
    "imgs" => [
      // "https://live.staticflickr.com/65535/51303419537_b7f8ef0d78_k.jpg",
      "https://live.staticflickr.com/65535/51304166641_d00852e5fe_k.jpg",
      // "https://live.staticflickr.com/65535/51304887054_a705795fb0_k.jpg",
      "https://live.staticflickr.com/65535/51303419467_d4771389b6_k.jpg",
      "https://live.staticflickr.com/65535/51304362858_d7abfc1dc5_k.jpg"
    ],
    "date" => "'21.7.11",
    "place" => "DORUMIRU Yasaka no Tou",
    "alt" => "ドルミール 八坂の塔"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_35.jpg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51497328544_7b4eeabb28_k.jpg",
      "https://live.staticflickr.com/65535/51497328479_628c0c7a00_k.jpg",
      "https://live.staticflickr.com/65535/51497538045_7b62c2f834_k.jpg",
      "https://live.staticflickr.com/65535/51496611976_b8c48208f6_k.jpg",
      "https://live.staticflickr.com/65535/51496611891_a10554f6ea_k.jpg"
    ],
    "date" => "'21.9.21",
    "place" => "Cluster amaryllis flower field, Kameoka",
    "alt" => "亀岡 彼岸花の里"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_36.jpg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51497328144_f772fd64a1_k.jpg"
    ],
    "date" => "'21.9.21",
    "place" => "Anao Temple",
    "alt" => "穴太寺"
  ],
  [
    "year" => "2021",
    "thumbnail" => "img_thumbnail_37.jpg",
    "imgs" => [
      "https://live.staticflickr.com/65535/51660852791_513ede88b1_k.jpg",
      "https://live.staticflickr.com/65535/51660852766_ce13ffd22c_k.jpg",
      "https://live.staticflickr.com/65535/51661529054_048c8cb157_k.jpg",
      "https://live.staticflickr.com/65535/51661080378_57d258e46c_k.jpg",
      "https://live.staticflickr.com/65535/51660047037_47f25aa5c1_k.jpg",
      "https://live.staticflickr.com/65535/51661725420_2ed829c230_k.jpg",
      "https://live.staticflickr.com/65535/51661528979_dea712a1dc_k.jpg",
      // "https://live.staticflickr.com/65535/51661528954_8f35d42988_k.jpg",
      "https://live.staticflickr.com/65535/51660047067_5c59b55230_k.jpg",
      "https://live.staticflickr.com/65535/51661528909_a408acffe6_k.jpg"
    ],
    "date" => "'21.11.7",
    "place" => "Mettya jimoto no yama",
    "alt" => "めっちゃ地元の山"
  ]
];

print json_encode($products);