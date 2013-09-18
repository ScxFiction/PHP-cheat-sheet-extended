﻿<?php


include_once( APP_DIR . '/class.vartype.php' );

/**
 *
 */
class VartypeCompare extends Vartype {

	/**
	 * The tests  to run
	 *
	 * @param   array   $tests  Multi-dimensional array.
	 *                          Possible lower level array keys:
	 *                          - title     Used as tab title
	 *                          - tooltip   Additional code sample for tooltip on tab
	 *                          - url       Relevant PHP Manual page
	 *                          - arg       Function arguments
	 *                          - function  Function to run
	 *                          - Notes     Array of notes on this test
	 */
	var $tests = array(
		/**
		 * Operator based comparisons
		 */
		'equal'			=> array(
			'title'			=> '==',
			'url'			=> 'http://php.net/language.operators.comparison',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_bool( $a==$b );',
		),
		'equal_strict'	=> array(
			'title'			=> '===',
			'url'			=> 'http://php.net/language.operators.comparison',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_bool( $a===$b );',
		),
		'not_equal'		=> array(
			'title'			=> '!=',
			'url'			=> 'http://php.net/language.operators.comparison',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_bool( $a!=$b );',
		),
		'not_equal2'	=> array(
			'title'			=> '&lt;&gt;',
			'url'			=> 'http://php.net/language.operators.comparison',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_bool( $a<>$b );',
		),
		'not_equal_strict'	=> array(
			'title'			=> '!==',
			'url'			=> 'http://php.net/language.operators.comparison',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_bool( $a!==$b );',
		),
		'lt'			=> array(
			'title'			=> '&lt;',
			'url'			=> 'http://php.net/language.operators.comparison',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_bool( $a<$b );',
		),
		'gt'			=> array(
			'title'			=> '&gt;',
			'url'			=> 'http://php.net/language.operators.comparison',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_bool( $a>$b );',
		),
		'lte'			=> array(
			'title'			=> '&lt;=',
			'url'			=> 'http://php.net/language.operators.comparison',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_bool( $a<=$b );',
		),
		'gte'			=> array(
			'title'			=> '&gt;=',
			'url'			=> 'http://php.net/language.operators.comparison',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_bool( $a>=$b );',
		),


		/**
		 * String comparison functions
		 *
		 * Note: all of these functions have a PHP5 equivalent in class.vartype-php5.php
		 */
		'strcmp'		=> array(
			'title'			=> 'strcmp()',
			'url'			=> 'http://php.net/strcmp',
			'arg'			=> '$a, $b',
			'function'		=> 'Vartype::compare_strings( $a, $b, "strcmp" );',
		),
		'strcasecmp'	=> array(
			'title'			=> 'strcasecmp()',
			'url'			=> 'http://php.net/strcasecmp',
			'arg'			=> '$a, $b',
			'function'		=> 'Vartype::compare_strings( $a, $b, "strcasecmp" );',
		),
		'strnatcmp'		=> array(
			'title'			=> 'strnatcmp()',
			'url'			=> 'http://php.net/strnatcmp',
			'arg'			=> '$a, $b',
			'function'		=> 'Vartype::compare_strings( $a, $b, "strnatcmp" );',
		),
		'strnatcasecmp'	=> array(
			'title'			=> 'strnatcasecmp()',
			'url'			=> 'http://php.net/strnatcasecmp',
			'arg'			=> '$a, $b',
			'function'		=> 'Vartype::compare_strings( $a, $b, "strnatcasecmp" );',
		),
		'strcoll'		=> array(
			'title'			=> 'strcoll()',
			'url'			=> 'http://php.net/strcoll',
			'arg'			=> '$a, $b',
			'function'		=> 'Vartype::compare_strings( $a, $b, "strcoll" );',
		),
		'similar_text'	=> array(
			'title'			=> 'similar_text()',
			'url'			=> 'http://php.net/similar_text',
			'arg'			=> '$a, $b',
			'function'		=> 'Vartype::compare_strings( $a, $b, "similar_text" );',
		),
		'levenshtein'	=> array(
			'title'			=> 'levenshtein()',
			'url'			=> 'http://php.net/levenshtein',
			'arg'			=> '$a, $b',
			'function'		=> 'Vartype::compare_strings( $a, $b, "levenshtein" );',
		),


		/**
		 * Number comparison functions
		 */
		'bccomp'	=> array(
			'title'			=> 'bccomp()',
			'url'			=> 'http://php.net/bccomp',
			'arg'			=> '$a, $b',
			'function'		=> 'if( extension_loaded( \'bcmath\' ) ) { $r = bccomp( $a, $b ); if( is_int( $r ) ) { pr_int( $r ); } else { pr_var( $r, \'\', true, true ); } } else { print \'E: bcmath extension not installed\'; }',
		),
		'min'			=> array(
			'title'			=> 'min()',
			'url'			=> 'http://php.net/min',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_var( min( $a, $b ), \'\', true, true );',
			'notes'			=> array(
				'<p><strong>Please note:</strong> <code>min() / max()</code> will evaluate a non-numeric string as 0 if compared to integer, but still return the string if it\'s seen as the numerically lowest/highest value.</p>',
				'<p><code>min()</code> If multiple arguments evaluate to 0, will return the lowest alphanumerical string value if any strings are given, else a numeric 0 is returned.</p>',
			),
		),

		'max'			=> array(
			'title'			=> 'max()',
			'url'			=> 'http://php.net/max',
			'arg'			=> '$a, $b',
			'function'		=> 'pr_var( max( $a, $b ), \'\', true, true );',
			'notes'			=> array(
				'<p><strong>Please note:</strong> <code>min() / max()</code> will evaluate a non-numeric string as 0 if compared to integer, but still return the string if it\'s seen as the numerically lowest/highest value.</p>',
				'<p><code>max()</code> returns the numerically highest of the parameter values. If multiple values can be considered of the same size, the one that is listed first will be returned.<br />
				 If <code>max()</code> is given multiple arrays, the longest array is returned. If all the arrays have the same length, <code>max()</code> will use lexicographic ordering to find the return value.</p>',
			),
		),
	);


	/**
	 *
	 */
	function __construct() {
		parent::__construct();
	}

	function VartypeCompare() {
		$this->__construct();
	}


	/**
	 * @param null $test_group
	 *
	 * @return mixed|null
	 */
	function get_test_group( $test_group = null ) {
		$key = key( $this->tests ); // get first item in array;
		if ( isset( $test_group ) && isset( $this->tests[$test_group] ) ) {
			$key = $test_group;
		}
		return $key;
	}


	/**
	 * @param bool $all
	 */
	function print_tabs( $all = false ) {
		// Tabs at top of page
		print '
	<ul>';
	
		foreach ( $this->tests as $key => $test ) {
			if ( $all === true ) {
				print '
		<li' . ( isset( $test['tooltip'] ) ? ' title="' . $test['tooltip'] . '"' : '' ) . '><a href="#' . $key . '"><strong>' . $test['title'] . '</strong></a></li>';
			}
			else {
				print '
		<li' . ( $GLOBALS['tab'] === $key ? ' class="ui-tabs-active ui-state-active"' : '' ) . ( isset( $test['tooltip'] ) ? ' title="' . $test['tooltip'] . '"' : '' ) . '><a href="index.php?type=' . $GLOBALS['type'] . '&amp;tab=' . $key . '&amp;do=ajax"><strong>' . $test['title'] . '</strong></a></li>';
			}
		}
		unset( $key, $test );

		print '
	</ul>';
	}
	
	
	function print_tables() {
		
		print '
	<div class="tables">';

		// Get & Slim down test array
		// @todo set this up to be flexible from within the tests
/*		include( APP_DIR . '/include/vars-to-test.php' );
//		array_splice( $key_array, 28, 13 );
//		array_splice( $key_array, 34, 2 );
*/
		
		$this->set_test_data();


		foreach ( $this->tests as $key => $test_settings ) {
			$GLOBALS['test'] = $key;
			$this->print_table( $key );
		}
		unset( $key, $test_settings );
		$this->clean_up();

		print '
	</div>';
	}


	// Comparison tables
	/**
	 * @param $test
	 */
	function print_table( $test ) {

		if ( isset( $this->tests[$test] ) ) {
			$GLOBALS['encountered_errors'] = array();

			print '
		<div id="' . $test . '">';

//			$header = $this->create_table_header( $test );

//			$this->print_tabletop( $header );

			$this->print_tabletop( $test );
			
			
			$last_key = null;

			foreach ( $this->test_data_keys as $key1 ) {
				$value1 = $this->test_data[$key1];
//				$label  = ( isset( $this->test_labels[$key1] ) ? $this->test_labels[$key1] : $value1 );
				$legend = ( isset( $this->test_legend[$key1] ) ? '<sup class="fright"><a href="#var-legend-' . $key1 . '">&dagger;' . $key1 . '</a></sup>' : '' );

				$type = substr( $key1, 0, 1 );

/*				$hr_key = array_search( $type, $this->header_repeat );
				if ( $hr_key !== false && $type !== $last_key ) {
					print $header;
				}
*/
				$class = array();
				if ( $type !== $last_key ) {
					$class[]  = 'newvartype';
					$last_key = $type;
				}

				if ( count( $class ) > 0 ) {
					print '
				<tr class="' . implode( ' ', $class ) . '">';
				}
				else {
					print '
				<tr>';
				}

				print '
					<th>' . $legend;
				pr_var( $value1, '', true );
				print '
					</th>';

				$this->print_row_cells( $value1, $test );

				print '
					<th>' . $legend;
				pr_var( $value1, '', true );
				print '
					</th>';

				print '
				</tr>';

				unset( $value1, $label, $type, $hr_key, $class );
			}
			unset( $key1, $last_key );

			print '
			</tbody>
			</table>';


			$this->print_error_footnotes( $test );
			$this->print_other_footnotes( $test );

			print '
		</div>';
		}
		else {
			trigger_error( 'Unknown test <b>' . $test . '</b>', E_USER_WARNING );
		}

	}


	/**
	 * @param $test
	 *
	 * @return string
	 */
	function create_table_header( $test ) {

		if ( isset( $this->tests[$test]['url'] ) && $this->tests[$test]['url'] !== '' ) {
			$group_label = '<a href="' . $this->tests[$test]['url'] . '" target="_blank"' . ( ( isset( $this->tests[$test]['tooltip'] ) && $this->tests[$test]['tooltip'] !== '' ) ? ' title="' . $this->tests[$test]['tooltip'] . '"' : '' ) . '><strong>' . $this->tests[$test]['title'] . '</strong></a>';
		}
		else {
			$group_label = '<a href="' . $this->tests[$test]['url'] . '" target="_blank"' . ( ( isset( $this->tests[$test]['tooltip'] ) && $this->tests[$test]['tooltip'] !== '' ) ? ' title="' . $this->tests[$test]['tooltip'] . '"' : '' ) . '><strong>' . $this->tests[$test]['title'] . '</strong></a>';
		}
		
		$notes = '';
		if ( isset( $this->tests[$test]['notes'] ) && ( is_array( $this->tests[$test]['notes'] ) && count( $this->tests[$test]['notes'] ) > 0 ) ) {
			foreach ( $this->tests[$test]['notes'] as $key => $note ) {
				$notes .= ' <sup><a href="#' . $test . '-note' . ( $key + 1 ) . '">&Dagger;' . ( $key + 1 ) . '</a></sup>';
			}
		}


		$html = '
				<tr>
					<th>' . $group_label . $notes . '</th>';


		// Top labels
		foreach ( $this->test_data_keys as $i => $key ) {
			$value = $this->test_data[$key];
			
			$class = '';
			if ( !isset( $this->test_data_keys[$i + 1] ) || substr( $key, 0, 1 ) !== substr( $this->test_data_keys[$i + 1], 0, 1 ) ) {
				$class = ' class="end"';
			}
			
			$html .= '
					<th' . $class . '>';
						
			ob_start();
			pr_var( $value, '', false, true, '' );
			$label = ob_get_clean();

			// @todo: improve upon - preverably in a way that the tooltip is fully HTML capable
			// at the very least move to seperate method (duplicate code)
			if ( strpos( $label, 'Object: ' ) !== false ) {
				$label = str_replace( '&nbsp;', ' ', $label );
				$label = str_replace( "\n", '', $label );
				$label = str_replace( 'null', "null\n", $label );
				$label = str_replace( '<br />', "\n", $label );
				$label = str_replace( '&lsquo;', "'", $label );
				$label = str_replace( '&rsquo;', "'", $label );
				$label = strip_tags( $label );
				$label = htmlspecialchars( $label, ENT_QUOTES, 'UTF-8' );

				$html .= '<span title="' . $label . '">Object(&hellip;)</span>';
			}
			else if ( strpos( $label, 'Array: ' ) !== false ) {
				$label = str_replace( '&nbsp;', ' ', $label );
				$label = str_replace( "\n", '', $label );
				$label = str_replace( '<br />', "\n", $label );
				$label = str_replace( '&lsquo;', "'", $label );
				$label = str_replace( '&rsquo;', "'", $label );

				$label = strip_tags( $label );
				$label = htmlspecialchars( $label, ENT_QUOTES, 'UTF-8' );
	
				$html .= '<span title="' . $label . '">Array(&hellip;)</span>';
			}
			else {
				$html .= $label;
			}
			$html .= '					</th>';

			unset( $value, $class, $label );
		}
		unset( $i, $key );
	
	
		$html .= '
					<th>' . $group_label . $notes . '</th>
				</tr>';
	
		return $html;
	}


	/**
	 * @param $value1
	 * @param $test
	 */
	function print_row_cells( $value1, $test ) {
		
		foreach ( $this->test_data_keys as $i => $key2 ) {
			$GLOBALS['has_error'] = array();

			$value2 = $this->test_data[$key2];

			$class = '';
			if ( !isset( $this->test_data_keys[$i + 1] ) || substr( $key2, 0, 1 ) !== substr( $this->test_data_keys[$i + 1], 0, 1 ) ) {
				$class = ' class="end"';
			}


			print '
				<td' . $class . '>';

			$this->tests[$test]['test']( $value1, $value2 );

			if ( is_array( $GLOBALS['has_error'] ) && count( $GLOBALS['has_error'] ) > 0 ) {
				foreach ( $GLOBALS['has_error'] as $error ) {
					if ( isset( $error['msg'] ) && $error['msg'] !== '' ) {
						print '<br />' . $error['msg'];
					}
				}
			}

			print '
					</td>';

			unset( $GLOBALS['has_error'], $value2, $type, $class );
		}
		unset( $i, $key2 );
	}


	/**
	 * @param $test
	 */
	function print_other_footnotes( $test ) {
		if ( isset( $this->tests[$test]['notes'] ) && ( is_array( $this->tests[$test]['notes'] ) && count( $this->tests[$test]['notes'] ) > 0 ) ) {
			foreach ( $this->tests[$test]['notes'] as $key => $note ) {
				print '
			<div id="' . $test . '-note' . ( $key + 1 ) . '" class="note-appendix">
				<sup>&Dagger; ' . ( $key + 1 ) . '</sup> ' . $note . '
			</div>
				';
			}
		}
	}
}

?>