plugin.tx_lostandfound {
    persistence {
        storagePid = {$plugin.tx_lostandfound.persistence.storagePid}
    }
    view {
        templateRootPaths {
            10 = EXT:lost_and_found/Resources/Private/Templates/
            20 = {$plugin.tx_lostandfound.view.templateRootPath}
        }
        partialRootPaths {
            10 = EXT:lost_and_found/Resources/Private/Partials/
            20 = {$plugin.tx_lostandfound.view.partialRootPath}
        }
        layoutRootPaths {
            10 = EXT:lost_and_found/Resources/Private/Layouts/
            20 = {$plugin.tx_lostandfound.view.layoutRootPath}
        }
    }
    // PROTECTED REGION ID(setup.txt.own.plugin.code.eee_1045467100313_135436_1) ENABLED START
	// PROTECTED REGION END
}

// PROTECTED REGION ID(setup.txt.own.code.eee_1045467100313_135436_1) ENABLED START
// PROTECTED REGION END
