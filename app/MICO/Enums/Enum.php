<?php
namespace MICO\Enums;
use ReflectionClass;
use Exception;
/**
 * @package Red.Core
 * @author kris@theredhead.nl
 *
 * Implements the abstract base for all enum types
 *
 * example of a typical enum:
 *
 *    class DayOfWeek extends Enum
 *    {
 *        const Sunday    = 0;
 *        const Monday    = 1;
 *        const Tuesday   = 2;
 *        const Wednesday = 3;
 *        const Thursday  = 4;
 *        const Friday    = 5;
 *        const Saturday  = 6;
 *    }
 *
 * usage examples:
 *
 *     $monday = Enum::getLabel( 'DayOfWeek::Monday' );           // (int) 1
 *     $monday = DayOfWeek::Monday                                  // (int) 1
 *     $monday = Enum::toString( 'DayOfWeek', DayOfWeek::Monday );  // (string) "DayOfWeek::Monday"
 *     $monday = Enum::getConst( 'DayOfWeek', DayOfWeek::Monday );     // (string) "Monday"
 *
* Pegar o valor de uma costante a partir do nome da constante
* $a = Enum::getLabel("tipo_de_risco::".$risco->tipo_de_risco)* 
* Pegar o nome da constante a partir do valor dela
* $b = Enum::getConst( 'tipo_de_risco',$a );* 
 *
 * ====================================================================================================================================
 *
 * Obs: O método getAll foi adiciondo à classe inicial e recebe como parâmetro o nome da classe do Enum retornando um array com todos * os itens do enum
 *
 * ====================================================================================================================================
 **/
abstract class Enum
{
    // make sure there are never any instances created
    final private function __construct()
    {
        throw new Exception( 'Enum and Subclasses cannot be instantiated.' );
    }

    /**
     * Give the integer associated with the const of the given string in the format of "class:const"
     *
     * @param string $string
     * @return integer
     */
    final public static function getLabel( $string )
    {
        if ( strpos( $string, '::' ) < 1 )
        {
            throw new Exception( 'Enum::getLabel( $string ) Input string is not in the expected format.' );
        }
        list( $class, $const ) = explode( '::', $string );

        if ( class_exists( $class ) )
        {
            $reflector = new ReflectionClass( $class );
            if ( $reflector->IsSubClassOf( 'SGME\Enums\Enum' ) )
            {
                if ( $reflector->hasConstant( $const ) )
                {
                    return eval( sprintf( 'return %s;', $string ) );
                }
            }
        }
        throw new Exception( sprintf( '%s does not map to an Enum field', $string ) );
    }

    final public static function isValidValue( $enumType, $enumValue )
    {
        if ( class_exists( $enumType ) )
        {
            $reflector = new ReflectionClass( $enumType );
            if ( $reflector->IsSubClassOf( 'SGME\Enums\Enum' ) )
            {
                foreach( $reflector->getConstants() as $label => $value )
                {
                    if ( $value == $enumValue )
                    {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    final public static function isValidLabel( $enumType, $enumValue )
    {
        if ( class_exists( $enumType ) )
        {
            $reflector = new ReflectionClass( $enumType );
            if ( $reflector->IsSubClassOf( 'SGME\Enums\Enum' ) )
            {
                foreach( $reflector->getConstants() as $label => $value )
                {
                    if ( $label == $enumValue )
                    {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /**
     * For a given $enumType, give the complete string representation for the given $enumValue (class::const)
     *
     * @param string $enumType
     * @param integer $enumValue
     * @return string
     */
    final public static function toString( $enumType, $enumValue )
    {
        $result = 'NotAnEnum::IllegalValue';

        if ( class_exists( $enumType ) )
        {
            $reflector = new ReflectionClass( $enumType );
            $result = $reflector->getName() . '::IllegalValue';
            foreach( $reflector->getConstants() as $key => $val )
            {
                if ( $val == $enumValue )
                {
                    $result = str_replace( 'IllegalValue', $key, $result );
                    break;
                }
            }
        }
        return $result;
    }

    /**
     * For a given $enumType, give the label associated with the given $enumValue (const name in class definition)
     *
     * @param string $enumType
     * @param integer $enumValue
     * @return string
     */
    final public static function getConst( $enumType, $enumValue )
    {
        $result = 'IllegalValue';

        if ( class_exists( $enumType ) )
        {
            $reflector = new ReflectionClass( $enumType );

            foreach( $reflector->getConstants() as $key => $val )
            {
                if ( $val == $enumValue )
                {
                    $result = $key;
                    break;
                }
            }
        }
        return $result;
    }

    /** Desenvolvido por Marcus Tenório em 05/04/13
     * Retorna um array com todos os elementos do Enum
     *
     * @param string $enumType
     * @return array
     */
    final public static function getAll($enumType)
    {
        $arr = array();
        $result = 'IllegalValue';

        if (class_exists($enumType)) {
            $reflector = new ReflectionClass($enumType);
		
		$cont = 0;
            foreach($reflector->getConstants() as $key => $val){             
                $arr[$cont]["key"] = $key;
		    $arr[$cont]["val"] = $val;
		    $cont++;
            }

            $result = $arr;
        }
        return $result;
    }

    final public static function getList($enumType)
    {
        $arr = array();
        $result = 'IllegalValue';

        if (class_exists($enumType)) {
            $reflector = new ReflectionClass($enumType);
        
            foreach($reflector->getConstants() as $key => $val){             
                $arr[$val] = $val;
            }

            $result = $arr;
        }
        return $result;
    }
}