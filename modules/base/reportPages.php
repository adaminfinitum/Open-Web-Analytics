<?php

//
// Open Web Analytics - An Open Source Web Analytics Framework
//
// Copyright 2006 Peter Adams. All rights reserved.
//
// Licensed under GPL v2.0 http://www.gnu.org/copyleft/gpl.html
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// $Id$
//

require_once(OWA_BASE_DIR.'/owa_view.php');
require_once(OWA_BASE_DIR.'/owa_reportController.php');

/**
 * Pages Report Controller
 * 
 * @author      Peter Adams <peter@openwebanalytics.com>
 * @copyright   Copyright &copy; 2006 Peter Adams <peter@openwebanalytics.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GPL v2.0
 * @category    owa
 * @package     owa
 * @version		$Revision$	      
 * @since		owa 1.0.0
 */

class owa_reportPagesController extends owa_reportController {
	
	function __construct($params) {
	
		return parent::__construct($params);
	}
	
	function action() {
			
		$this->setSubview('base.reportDimension');
		$this->setTitle('Web Pages');
		$this->set('metrics', 'visits,pageViews,bounces');
		$this->set('dimensions', 'pageTitle,pageUrl');
		$this->set('sort', 'visits');
		$this->set('resultsPerPage', 30);
		$this->set('dimensionLink', array('linkColumn' => 'pageTitle', 
												'template' => array('do' => 'base.reportDocument', 'pageUrl' => '%s'), 
												'valueColumns' => 'pageUrl'));
		$this->set('trendChartMetric', 'pageViews');
		$this->set('trendTitle', 'There were <%= this.d.resultSet.aggregates.visits.value %> page views for all pages.');
		$this->set('gridTitle', 'Top Pages');		
	}
}


?>