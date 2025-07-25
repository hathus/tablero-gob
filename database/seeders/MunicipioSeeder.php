<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = array(
            array('municipio_numero' => '001', 'municipio_nombre' =>  'Amaxac de Guerrero', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '002', 'municipio_nombre' =>  'Apetatitlán de Antonio Carvajal', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '003', 'municipio_nombre' =>  'Atlangatepec', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '004', 'municipio_nombre' =>  'Atltzayanca', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '005', 'municipio_nombre' =>  'Apizaco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '006', 'municipio_nombre' =>  'Calpulalpan', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '007', 'municipio_nombre' =>  'El Carmen Tequexquitla', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '008', 'municipio_nombre' =>  'Cuapiaxtla', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '009', 'municipio_nombre' =>  'Cuaxomulco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '010', 'municipio_nombre' =>  'Chiautempan', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '011', 'municipio_nombre' =>  'Muñoz de Domingo Arenas', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '012', 'municipio_nombre' =>  'Españita', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '013', 'municipio_nombre' =>  'Huamantla', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '014', 'municipio_nombre' =>  'Hueyotlipan', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '015', 'municipio_nombre' =>  'Ixtacuixtla de Mariano Matamoros', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '016', 'municipio_nombre' =>  'Ixtenco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '017', 'municipio_nombre' =>  'Mazatecochco de José María Morelos', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '018', 'municipio_nombre' =>  'Contla de Juan Cuamatzi', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '019', 'municipio_nombre' =>  'Tepetitla de Lardizábal', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '020', 'municipio_nombre' =>  'Sanctórum de Lázaro Cárdenas', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '021', 'municipio_nombre' =>  'Nanacamilpa de Mariano Arista', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '022', 'municipio_nombre' =>  'Acuamanala de Miguel Hidalgo', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '023', 'municipio_nombre' =>  'Natívitas', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '024', 'municipio_nombre' =>  'Panotla', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '025', 'municipio_nombre' =>  'San Pablo del Monte', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '026', 'municipio_nombre' =>  'Santa Cruz Tlaxcala', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '027', 'municipio_nombre' =>  'Tenancingo', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '028', 'municipio_nombre' =>  'Teolocholco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '029', 'municipio_nombre' =>  'Tepeyanco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '030', 'municipio_nombre' =>  'Terrenate', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '031', 'municipio_nombre' =>  'Tetla de la Solidaridad', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '032', 'municipio_nombre' =>  'Tetlatlahuca', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '033', 'municipio_nombre' =>  'Tlaxcala', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '034', 'municipio_nombre' =>  'Tlaxco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '035', 'municipio_nombre' =>  'Tocatlán', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '036', 'municipio_nombre' =>  'Totolac', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '037', 'municipio_nombre' =>  'Ziltlaltépec de Trinidad Sánchez Santos', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '038', 'municipio_nombre' =>  'Tzompantepec', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '039', 'municipio_nombre' =>  'Xaloztoc', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '040', 'municipio_nombre' =>  'Xaltocan', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '041', 'municipio_nombre' =>  'Papalotla de Xicohténcatl', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '042', 'municipio_nombre' =>  'Xicohtzinco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '043', 'municipio_nombre' =>  'Yauhquemehcan', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '044', 'municipio_nombre' =>  'Zacatelco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '045', 'municipio_nombre' =>  'Benito Juárez', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '046', 'municipio_nombre' =>  'Emiliano Zapata', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '047', 'municipio_nombre' =>  'Lázaro Cárdenas', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '048', 'municipio_nombre' =>  'La Magdalena Tlaltelulco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '049', 'municipio_nombre' =>  'San Damián Texóloc', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '050', 'municipio_nombre' =>  'San Francisco Tetlanohcan', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '051', 'municipio_nombre' =>  'San Jerónimo Zacualpan', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '052', 'municipio_nombre' =>  'San José Teacalco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '053', 'municipio_nombre' =>  'San Juan Huactzinco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '054', 'municipio_nombre' =>  'San Lorenzo Axocomanitla', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '055', 'municipio_nombre' =>  'San Lucas Tecopilco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '056', 'municipio_nombre' =>  'Santa Ana Nopalucan', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '057', 'municipio_nombre' =>  'Santa Apolonia Teacalco', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '058', 'municipio_nombre' =>  'Santa Catarina Ayometla', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '059', 'municipio_nombre' =>  'Santa Cruz Quilehtla', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),),
            array('municipio_numero' => '060', 'municipio_nombre' =>  'Santa Isabel Xiloxoxtla', 'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),)
        );

        DB::table('municipios')->insert($municipios);
    }
}
