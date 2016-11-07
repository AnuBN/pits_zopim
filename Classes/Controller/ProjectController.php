<?php
namespace PITS\PitsZopim\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Anu Bhuvanendran Nair <anu.bn@pitsolutions.com>, PITS
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * ProjectController
 */
class ProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * projectRepository
     *
     * @var \PITS\PitsZopim\Domain\Repository\ProjectRepository
     * @inject
     */
    protected $projectRepository = NULL;
    
    /**
     * action show
     *
     * @param \PITS\PitsZopim\Domain\Model\Project $project
     * @return void
     */
    public function showAction()
    {
        $api = $this->settings['flexform']['api'];
        $this->view->assign('api', $api);
    }

    /**
     * action new
     *
     * @param \PITS\PitsZopim\Domain\Model\Project $project
     * @return void
     */
    public function newAction()
    {
        $this->view->assign('project', $project);
    }

}