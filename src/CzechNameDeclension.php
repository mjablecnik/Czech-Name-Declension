<?php
/**
 * Czech Name Declension
 *
 * Converts Czech nouns and persons' names to the requested declension.
 *
 * @version    1.0 (2017-05-08 10:23:00 GMT)
 * @author     Peter Kahl <peter.kahl@colossalmind.com>
 * @since      2017
 * @license    Apache License, Version 2.0
 *
 * Copyright 2017 Peter Kahl <peter.kahl@colossalmind.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      <http://www.apache.org/licenses/LICENSE-2.0>
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace peterkahl\CzechNameDeclension;

use \Exception;

class CzechNameDeclension {

  #===================================================================

  public static function getVocative($name) {
    #----
    # Petr
    if (iconv_substr($lcName, -2) == 'tr') {
      return preg_replace('/^(.*)tr$/i', '$1tře', $name);
    }
    #----
    # Eliška, Jana, Marta, Margareta, Hana, Adéla, Agáta, Božena,
    # Eliška, Oldřiška, Honza, Vojta, Ondra, Ilja, Jirka
    if (iconv_substr($lcName, -1) == 'a') {
      return preg_replace('/^(.*)a$/i', '$1o', $name);
    }
    #----
    # Dagmar, Ingrid
    if (in_array($lcName, array('dagmar','ingrid','margit'))) {
      return $name;
    }
    #----
    # Marie, Žofie, Evžénie
    # Jiří, Bruno
    # Mária
    if (iconv_substr($lcName, -1) == 'e' || iconv_substr($lcName, -1) == 'í' || iconv_substr($lcName, -1) == 'o' || iconv_substr($lcName, -2) == 'ia') {
      return $name;
    }
    #----
    # Aleš, Bartoloměj, Lukáš, Tomáš, Luboš, Ondřej, Řehoř, Max
    if (in_array(iconv_substr($lcName, -1), array('ř','š','j','x'))) {
      return $name.'i';
    }
    #----
    # Adam, Adolf, Alan, Albert, Antonín, Artur, Filip, Jakub,
    # Jan, Jaroslav, Kryštof, Libor, Lubomír, Roman, Milan, Oskar,
    # Richard, Miroslav, Vlastislav, Valdemar, Bohuslav
    if (in_array(iconv_substr($lcName, -1), array('b','d','f','m','n','p','r','t','v'))) {
      return $name.'e';
    }
    #----
    # Pavel, Havel, Karel
    if (iconv_substr($lcName, -2) == 'el') {
      return preg_replace('/^(.*)el$/i', '$1le', $name);
    }
    #----
    # Pankrác, Servác, Bonifác
    if (iconv_substr($lcName, -2) == 'ác') {
      return preg_replace('/^(.*)ác$/i', '$1ci', $name);
    }
    #----
    # Bedřich, Vojtěch
    if (iconv_substr($lcName, -2) == 'ch') {
      return $name.'u';
    }
    #----
    # Zbyněk, Vašek, Čeněk, Hyněk, Mirek, Radek, Vaněk
    if (iconv_substr($lcName, -2) == 'ek')) {
      return preg_replace('/^(.*)ek$/i', '$1ku', $name);
    }
    #----
    # Honzík, Maxík, Pavlík, Petřík
    if (iconv_substr($lcName, -2) == 'ek')) {
      return preg_replace('/^(.*)ík$/i', '$1íku', $name);
    }
  }

  #===================================================================

}