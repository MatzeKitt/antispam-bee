<?php

namespace AntispamBee\Helpers;

class LangHelper {

	/**
	 * Map franc language codes
	 *
	 * @param string $franc_code The franc code, received from the service.
	 *
	 * @return string             Mapped ISO code
	 * @since   2.9.0
	 *
	 */
	public static function map( $franc_code ) {
		$codes = [
			'zha' => 'za',
			'zho' => 'zh',
			'zul' => 'zu',
			'yid' => 'yi',
			'yor' => 'yo',
			'xho' => 'xh',
			'wln' => 'wa',
			'wol' => 'wo',
			'ven' => 've',
			'vie' => 'vi',
			'vol' => 'vo',
			'uig' => 'ug',
			'ukr' => 'uk',
			'urd' => 'ur',
			'uzb' => 'uz',
			'tah' => 'ty',
			'tam' => 'ta',
			'tat' => 'tt',
			'tel' => 'te',
			'tgk' => 'tg',
			'tgl' => 'tl',
			'tha' => 'th',
			'tir' => 'ti',
			'ton' => 'to',
			'tsn' => 'tn',
			'tso' => 'ts',
			'tuk' => 'tk',
			'tur' => 'tr',
			'twi' => 'tw',
			'sag' => 'sg',
			'san' => 'sa',
			'sin' => 'si',
			'slk' => 'sk',
			'slv' => 'sl',
			'sme' => 'se',
			'smo' => 'sm',
			'sna' => 'sn',
			'snd' => 'sd',
			'som' => 'so',
			'sot' => 'st',
			'spa' => 'es',
			'sqi' => 'sq',
			'srd' => 'sc',
			'srp' => 'sr',
			'ssw' => 'ss',
			'sun' => 'su',
			'swa' => 'sw',
			'swe' => 'sv',
			'roh' => 'rm',
			'ron' => 'ro',
			'run' => 'rn',
			'rus' => 'ru',
			'que' => 'qu',
			'pan' => 'pa',
			'pli' => 'pi',
			'pol' => 'pl',
			'por' => 'pt',
			'pus' => 'ps',
			'oci' => 'oc',
			'oji' => 'oj',
			'ori' => 'or',
			'orm' => 'om',
			'oss' => 'os',
			'nau' => 'na',
			'nav' => 'nv',
			'nbl' => 'nr',
			'nde' => 'nd',
			'ndo' => 'ng',
			'nep' => 'ne',
			'nld' => 'nl',
			'nno' => 'nn',
			'nob' => 'nb',
			'nor' => 'no',
			'nya' => 'ny',
			'mah' => 'mh',
			'mal' => 'ml',
			'mar' => 'mr',
			'mkd' => 'mk',
			'mlg' => 'mg',
			'mlt' => 'mt',
			'mon' => 'mn',
			'mri' => 'mi',
			'msa' => 'ms',
			'mya' => 'my',
			'lao' => 'lo',
			'lat' => 'la',
			'lav' => 'lv',
			'lim' => 'li',
			'lin' => 'ln',
			'lit' => 'lt',
			'ltz' => 'lb',
			'lub' => 'lu',
			'lug' => 'lg',
			'kal' => 'kl',
			'kan' => 'kn',
			'kas' => 'ks',
			'kat' => 'ka',
			'kau' => 'kr',
			'kaz' => 'kk',
			'khm' => 'km',
			'kik' => 'ki',
			'kin' => 'rw',
			'kir' => 'ky',
			'kom' => 'kv',
			'kon' => 'kg',
			'kor' => 'ko',
			'kua' => 'kj',
			'kur' => 'ku',
			'jav' => 'jv',
			'jpn' => 'ja',
			'ibo' => 'ig',
			'ido' => 'io',
			'iii' => 'ii',
			'iku' => 'iu',
			'ile' => 'ie',
			'ina' => 'ia',
			'ind' => 'id',
			'ipk' => 'ik',
			'isl' => 'is',
			'ita' => 'it',
			'hat' => 'ht',
			'hau' => 'ha',
			'hbs' => 'sh',
			'heb' => 'he',
			'her' => 'hz',
			'hin' => 'hi',
			'hmo' => 'ho',
			'hrv' => 'hr',
			'hun' => 'hu',
			'hye' => 'hy',
			'gla' => 'gd',
			'gle' => 'ga',
			'glg' => 'gl',
			'glv' => 'gv',
			'grn' => 'gn',
			'guj' => 'gu',
			'fao' => 'fo',
			'fas' => 'fa',
			'fij' => 'fj',
			'fin' => 'fi',
			'fra' => 'fr',
			'fry' => 'fy',
			'ful' => 'ff',
			'ell' => 'el',
			'eng' => 'en',
			'epo' => 'eo',
			'est' => 'et',
			'eus' => 'eu',
			'ewe' => 'ee',
			'dan' => 'da',
			'deu' => 'de',
			'div' => 'dv',
			'dzo' => 'dz',
			'cat' => 'ca',
			'ces' => 'cs',
			'cha' => 'ch',
			'che' => 'ce',
			'chu' => 'cu',
			'chv' => 'cv',
			'cor' => 'kw',
			'cos' => 'co',
			'cre' => 'cr',
			'cym' => 'cy',
			'bak' => 'ba',
			'bam' => 'bm',
			'bel' => 'be',
			'ben' => 'bn',
			'bis' => 'bi',
			'bod' => 'bo',
			'bos' => 'bs',
			'bre' => 'br',
			'bul' => 'bg',
			'aar' => 'aa',
			'abk' => 'ab',
			'afr' => 'af',
			'aka' => 'ak',
			'amh' => 'am',
			'ara' => 'ar',
			'arg' => 'an',
			'asm' => 'as',
			'ava' => 'av',
			'ave' => 'ae',
			'aym' => 'ay',
			'aze' => 'az',
			'nds' => 'de',
		];

		if ( array_key_exists( $franc_code, $codes ) ) {
			return $codes[ $franc_code ];
		}

		return $franc_code;
	}

}
