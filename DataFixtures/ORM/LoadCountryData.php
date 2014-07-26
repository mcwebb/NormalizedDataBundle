<?php
namespace Mcwebb\NormalizedDataBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mcwebb\NormalizedDataBundle\Entity\Country;

class LoadCountryData extends AbstractFixture implements OrderedFixtureInterface
{
    private $data = array(
        array('alpha2' => 'AD', 'name' => "Andorra"),
        array('alpha2' => 'AE', 'name' => "United Arab Emirates"),
        array('alpha2' => 'AF', 'name' => "Afghanistan"),
        array('alpha2' => 'AG', 'name' => "Antigua and Barbuda"),
        array('alpha2' => 'AI', 'name' => "Anguilla"),
        array('alpha2' => 'AL', 'name' => "Albania"),
        array('alpha2' => 'AM', 'name' => "Armenia"),
        array('alpha2' => 'AO', 'name' => "Angola"),
        array('alpha2' => 'AQ', 'name' => "Antarctica"),
        array('alpha2' => 'AR', 'name' => "Argentina"),
        array('alpha2' => 'AS', 'name' => "American Samoa"),
        array('alpha2' => 'AT', 'name' => "Austria"),
        array('alpha2' => 'AU', 'name' => "Australia"),
        array('alpha2' => 'AW', 'name' => "Aruba"),
        array('alpha2' => 'AX', 'name' => "Åland Islands"),
        array('alpha2' => 'AZ', 'name' => "Azerbaijan"),
        array('alpha2' => 'BA', 'name' => "Bosnia and Herzegovina"),
        array('alpha2' => 'BB', 'name' => "Barbados"),
        array('alpha2' => 'BD', 'name' => "Bangladesh"),
        array('alpha2' => 'BE', 'name' => "Belgium"),
        array('alpha2' => 'BF', 'name' => "Burkina Faso"),
        array('alpha2' => 'BG', 'name' => "Bulgaria"),
        array('alpha2' => 'BH', 'name' => "Bahrain"),
        array('alpha2' => 'BI', 'name' => "Burundi"),
        array('alpha2' => 'BJ', 'name' => "Benin"),
        array('alpha2' => 'BL', 'name' => "Saint Barthélemy"),
        array('alpha2' => 'BM', 'name' => "Bermuda"),
        array('alpha2' => 'BN', 'name' => "Brunei Darussalam"),
        array('alpha2' => 'BO', 'name' => "Bolivia, Plurinational State of"),
        array('alpha2' => 'BQ', 'name' => "Bonaire, Sint Eustatius and Saba"),
        array('alpha2' => 'BR', 'name' => "Brazil"),
        array('alpha2' => 'BS', 'name' => "Bahamas"),
        array('alpha2' => 'BT', 'name' => "Bhutan"),
        array('alpha2' => 'BV', 'name' => "Bouvet Island"),
        array('alpha2' => 'BW', 'name' => "Botswana"),
        array('alpha2' => 'BY', 'name' => "Belarus"),
        array('alpha2' => 'BZ', 'name' => "Belize"),
        array('alpha2' => 'CA', 'name' => "Canada"),
        array('alpha2' => 'CC', 'name' => "Cocos (Keeling) Islands"),
        array('alpha2' => 'CD', 'name' => "Congo, the Democratic Republic of the"),
        array('alpha2' => 'CF', 'name' => "Central African Republic"),
        array('alpha2' => 'CG', 'name' => "Congo"),
        array('alpha2' => 'CH', 'name' => "Switzerland"),
        array('alpha2' => 'CI', 'name' => "Côte d'Ivoire"),
        array('alpha2' => 'CK', 'name' => "Cook Islands"),
        array('alpha2' => 'CL', 'name' => "Chile"),
        array('alpha2' => 'CM', 'name' => "Cameroon"),
        array('alpha2' => 'CN', 'name' => "China"),
        array('alpha2' => 'CO', 'name' => "Colombia"),
        array('alpha2' => 'CR', 'name' => "Costa Rica"),
        array('alpha2' => 'CU', 'name' => "Cuba"),
        array('alpha2' => 'CV', 'name' => "Cabo Verde"),
        array('alpha2' => 'CW', 'name' => "Curaçao"),
        array('alpha2' => 'CX', 'name' => "Christmas Island"),
        array('alpha2' => 'CY', 'name' => "Cyprus"),
        array('alpha2' => 'CZ', 'name' => "Czech Republic"),
        array('alpha2' => 'DE', 'name' => "Germany"),
        array('alpha2' => 'DJ', 'name' => "Djibouti"),
        array('alpha2' => 'DK', 'name' => "Denmark"),
        array('alpha2' => 'DM', 'name' => "Dominica"),
        array('alpha2' => 'DO', 'name' => "Dominican Republic"),
        array('alpha2' => 'DZ', 'name' => "Algeria"),
        array('alpha2' => 'EC', 'name' => "Ecuador"),
        array('alpha2' => 'EE', 'name' => "Estonia"),
        array('alpha2' => 'EG', 'name' => "Egypt"),
        array('alpha2' => 'EH', 'name' => "Western Sahara"),
        array('alpha2' => 'ER', 'name' => "Eritrea"),
        array('alpha2' => 'ES', 'name' => "Spain"),
        array('alpha2' => 'ET', 'name' => "Ethiopia"),
        array('alpha2' => 'FI', 'name' => "Finland"),
        array('alpha2' => 'FJ', 'name' => "Fiji"),
        array('alpha2' => 'FK', 'name' => "Falkland Islands (Malvinas)"),
        array('alpha2' => 'FM', 'name' => "Micronesia, Federated States of"),
        array('alpha2' => 'FO', 'name' => "Faroe Islands"),
        array('alpha2' => 'FR', 'name' => "France"),
        array('alpha2' => 'GA', 'name' => "Gabon"),
        array('alpha2' => 'GB', 'name' => "United Kingdom"),
        array('alpha2' => 'GD', 'name' => "Grenada"),
        array('alpha2' => 'GE', 'name' => "Georgia"),
        array('alpha2' => 'GF', 'name' => "French Guiana"),
        array('alpha2' => 'GG', 'name' => "Guernsey"),
        array('alpha2' => 'GH', 'name' => "Ghana"),
        array('alpha2' => 'GI', 'name' => "Gibraltar"),
        array('alpha2' => 'GL', 'name' => "Greenland"),
        array('alpha2' => 'GM', 'name' => "Gambia"),
        array('alpha2' => 'GN', 'name' => "Guinea"),
        array('alpha2' => 'GP', 'name' => "Guadeloupe"),
        array('alpha2' => 'GQ', 'name' => "Equatorial Guinea"),
        array('alpha2' => 'GR', 'name' => "Greece"),
        array('alpha2' => 'GS', 'name' => "South Georgia and the South Sandwich Islands"),
        array('alpha2' => 'GT', 'name' => "Guatemala"),
        array('alpha2' => 'GU', 'name' => "Guam"),
        array('alpha2' => 'GW', 'name' => "Guinea-Bissau"),
        array('alpha2' => 'GY', 'name' => "Guyana"),
        array('alpha2' => 'HK', 'name' => "Hong Kong"),
        array('alpha2' => 'HM', 'name' => "Heard Island and McDonald Islands"),
        array('alpha2' => 'HN', 'name' => "Honduras"),
        array('alpha2' => 'HR', 'name' => "Croatia"),
        array('alpha2' => 'HT', 'name' => "Haiti"),
        array('alpha2' => 'HU', 'name' => "Hungary"),
        array('alpha2' => 'ID', 'name' => "Indonesia"),
        array('alpha2' => 'IE', 'name' => "Ireland"),
        array('alpha2' => 'IL', 'name' => "Israel"),
        array('alpha2' => 'IM', 'name' => "Isle of Man"),
        array('alpha2' => 'IN', 'name' => "India"),
        array('alpha2' => 'IO', 'name' => "British Indian Ocean Territory"),
        array('alpha2' => 'IQ', 'name' => "Iraq"),
        array('alpha2' => 'IR', 'name' => "Iran, Islamic Republic of"),
        array('alpha2' => 'IS', 'name' => "Iceland"),
        array('alpha2' => 'IT', 'name' => "Italy"),
        array('alpha2' => 'JE', 'name' => "Jersey"),
        array('alpha2' => 'JM', 'name' => "Jamaica"),
        array('alpha2' => 'JO', 'name' => "Jordan"),
        array('alpha2' => 'JP', 'name' => "Japan"),
        array('alpha2' => 'KE', 'name' => "Kenya"),
        array('alpha2' => 'KG', 'name' => "Kyrgyzstan"),
        array('alpha2' => 'KH', 'name' => "Cambodia"),
        array('alpha2' => 'KI', 'name' => "Kiribati"),
        array('alpha2' => 'KM', 'name' => "Comoros"),
        array('alpha2' => 'KN', 'name' => "Saint Kitts and Nevis"),
        array('alpha2' => 'KP', 'name' => "Korea, Democratic People's Republic of"),
        array('alpha2' => 'KR', 'name' => "Korea, Republic of"),
        array('alpha2' => 'KW', 'name' => "Kuwait"),
        array('alpha2' => 'KY', 'name' => "Cayman Islands"),
        array('alpha2' => 'KZ', 'name' => "Kazakhstan"),
        array('alpha2' => 'LA', 'name' => "Lao People's Democratic Republic"),
        array('alpha2' => 'LB', 'name' => "Lebanon"),
        array('alpha2' => 'LC', 'name' => "Saint Lucia"),
        array('alpha2' => 'LI', 'name' => "Liechtenstein"),
        array('alpha2' => 'LK', 'name' => "Sri Lanka"),
        array('alpha2' => 'LR', 'name' => "Liberia"),
        array('alpha2' => 'LS', 'name' => "Lesotho"),
        array('alpha2' => 'LT', 'name' => "Lithuania"),
        array('alpha2' => 'LU', 'name' => "Luxembourg"),
        array('alpha2' => 'LV', 'name' => "Latvia"),
        array('alpha2' => 'LY', 'name' => "Libya"),
        array('alpha2' => 'MA', 'name' => "Morocco"),
        array('alpha2' => 'MC', 'name' => "Monaco"),
        array('alpha2' => 'MD', 'name' => "Moldova, Republic of"),
        array('alpha2' => 'ME', 'name' => "Montenegro"),
        array('alpha2' => 'MF', 'name' => "Saint Martin (French part)"),
        array('alpha2' => 'MG', 'name' => "Madagascar"),
        array('alpha2' => 'MH', 'name' => "Marshall Islands"),
        array('alpha2' => 'MK', 'name' => "Macedonia, the former Yugoslav Republic of"),
        array('alpha2' => 'ML', 'name' => "Mali"),
        array('alpha2' => 'MM', 'name' => "Myanmar"),
        array('alpha2' => 'MN', 'name' => "Mongolia"),
        array('alpha2' => 'MO', 'name' => "Macao"),
        array('alpha2' => 'MP', 'name' => "Northern Mariana Islands"),
        array('alpha2' => 'MQ', 'name' => "Martinique"),
        array('alpha2' => 'MR', 'name' => "Mauritania"),
        array('alpha2' => 'MS', 'name' => "Montserrat"),
        array('alpha2' => 'MT', 'name' => "Malta"),
        array('alpha2' => 'MU', 'name' => "Mauritius"),
        array('alpha2' => 'MV', 'name' => "Maldives"),
        array('alpha2' => 'MW', 'name' => "Malawi"),
        array('alpha2' => 'MX', 'name' => "Mexico"),
        array('alpha2' => 'MY', 'name' => "Malaysia"),
        array('alpha2' => 'MZ', 'name' => "Mozambique"),
        array('alpha2' => 'NA', 'name' => "Namibia"),
        array('alpha2' => 'NC', 'name' => "New Caledonia"),
        array('alpha2' => 'NE', 'name' => "Niger"),
        array('alpha2' => 'NF', 'name' => "Norfolk Island"),
        array('alpha2' => 'NG', 'name' => "Nigeria"),
        array('alpha2' => 'NI', 'name' => "Nicaragua"),
        array('alpha2' => 'NL', 'name' => "Netherlands"),
        array('alpha2' => 'NO', 'name' => "Norway"),
        array('alpha2' => 'NP', 'name' => "Nepal"),
        array('alpha2' => 'NR', 'name' => "Nauru"),
        array('alpha2' => 'NU', 'name' => "Niue"),
        array('alpha2' => 'NZ', 'name' => "New Zealand"),
        array('alpha2' => 'OM', 'name' => "Oman"),
        array('alpha2' => 'PA', 'name' => "Panama"),
        array('alpha2' => 'PE', 'name' => "Peru"),
        array('alpha2' => 'PF', 'name' => "French Polynesia"),
        array('alpha2' => 'PG', 'name' => "Papua New Guinea"),
        array('alpha2' => 'PH', 'name' => "Philippines"),
        array('alpha2' => 'PK', 'name' => "Pakistan"),
        array('alpha2' => 'PL', 'name' => "Poland"),
        array('alpha2' => 'PM', 'name' => "Saint Pierre and Miquelon"),
        array('alpha2' => 'PN', 'name' => "Pitcairn"),
        array('alpha2' => 'PR', 'name' => "Puerto Rico"),
        array('alpha2' => 'PS', 'name' => "Palestine, State of"),
        array('alpha2' => 'PT', 'name' => "Portugal"),
        array('alpha2' => 'PW', 'name' => "Palau"),
        array('alpha2' => 'PY', 'name' => "Paraguay"),
        array('alpha2' => 'QA', 'name' => "Qatar"),
        array('alpha2' => 'RE', 'name' => "Réunion"),
        array('alpha2' => 'RO', 'name' => "Romania"),
        array('alpha2' => 'RS', 'name' => "Serbia"),
        array('alpha2' => 'RU', 'name' => "Russian Federation"),
        array('alpha2' => 'RW', 'name' => "Rwanda"),
        array('alpha2' => 'SA', 'name' => "Saudi Arabia"),
        array('alpha2' => 'SB', 'name' => "Solomon Islands"),
        array('alpha2' => 'SC', 'name' => "Seychelles"),
        array('alpha2' => 'SD', 'name' => "Sudan"),
        array('alpha2' => 'SE', 'name' => "Sweden"),
        array('alpha2' => 'SG', 'name' => "Singapore"),
        array('alpha2' => 'SH', 'name' => "Saint Helena, Ascension and Tristan da Cunha"),
        array('alpha2' => 'SI', 'name' => "Slovenia"),
        array('alpha2' => 'SJ', 'name' => "Svalbard and Jan Mayen"),
        array('alpha2' => 'SK', 'name' => "Slovakia"),
        array('alpha2' => 'SL', 'name' => "Sierra Leone"),
        array('alpha2' => 'SM', 'name' => "San Marino"),
        array('alpha2' => 'SN', 'name' => "Senegal"),
        array('alpha2' => 'SO', 'name' => "Somalia"),
        array('alpha2' => 'SR', 'name' => "Suriname"),
        array('alpha2' => 'SS', 'name' => "South Sudan"),
        array('alpha2' => 'ST', 'name' => "Sao Tome and Principe"),
        array('alpha2' => 'SV', 'name' => "El Salvador"),
        array('alpha2' => 'SX', 'name' => "Sint Maarten (Dutch part)"),
        array('alpha2' => 'SY', 'name' => "Syrian Arab Republic"),
        array('alpha2' => 'SZ', 'name' => "Swaziland"),
        array('alpha2' => 'TC', 'name' => "Turks and Caicos Islands"),
        array('alpha2' => 'TD', 'name' => "Chad"),
        array('alpha2' => 'TF', 'name' => "French Southern Territories"),
        array('alpha2' => 'TG', 'name' => "Togo"),
        array('alpha2' => 'TH', 'name' => "Thailand"),
        array('alpha2' => 'TJ', 'name' => "Tajikistan"),
        array('alpha2' => 'TK', 'name' => "Tokelau"),
        array('alpha2' => 'TL', 'name' => "Timor-Leste"),
        array('alpha2' => 'TM', 'name' => "Turkmenistan"),
        array('alpha2' => 'TN', 'name' => "Tunisia"),
        array('alpha2' => 'TO', 'name' => "Tonga"),
        array('alpha2' => 'TR', 'name' => "Turkey"),
        array('alpha2' => 'TT', 'name' => "Trinidad and Tobago"),
        array('alpha2' => 'TV', 'name' => "Tuvalu"),
        array('alpha2' => 'TW', 'name' => "Taiwan"),
        array('alpha2' => 'TZ', 'name' => "Tanzania, United Republic of"),
        array('alpha2' => 'UA', 'name' => "Ukraine"),
        array('alpha2' => 'UG', 'name' => "Uganda"),
        array('alpha2' => 'UM', 'name' => "United States Minor Outlying Islands"),
        array('alpha2' => 'US', 'name' => "United States"),
        array('alpha2' => 'UY', 'name' => "Uruguay"),
        array('alpha2' => 'UZ', 'name' => "Uzbekistan"),
        array('alpha2' => 'VA', 'name' => "Holy See (Vatican City State)"),
        array('alpha2' => 'VC', 'name' => "Saint Vincent and the Grenadines"),
        array('alpha2' => 'VE', 'name' => "Venezuela, Bolivarian Republic of"),
        array('alpha2' => 'VG', 'name' => "Virgin Islands, British"),
        array('alpha2' => 'VI', 'name' => "Virgin Islands, U.S."),
        array('alpha2' => 'VN', 'name' => "Viet Nam"),
        array('alpha2' => 'VU', 'name' => "Vanuatu"),
        array('alpha2' => 'WF', 'name' => "Wallis and Futuna"),
        array('alpha2' => 'WS', 'name' => "Samoa"),
        array('alpha2' => 'YE', 'name' => "Yemen"),
        array('alpha2' => 'YT', 'name' => "Mayotte"),
        array('alpha2' => 'ZA', 'name' => "South Africa"),
        array('alpha2' => 'ZM', 'name' => "Zambia"),
        array('alpha2' => 'ZW', 'name' => "Zimbabwe")
    );

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->data as $row) {
            $country = new Country;
            $country->setCode($row['alpha2']);
            $country->setName($row['name']);
            $manager->persist($country);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}