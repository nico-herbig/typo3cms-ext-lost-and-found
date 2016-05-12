plugin.tx_lostandfound {
    persistence {
        # cat=plugin.tx_lostandfound//a; type=string; label=Default storage PID
        storagePid =
    }
    view {
        # cat=plugin.tx_lostandfound/file; type=string; label=Path to template roots (FE)
        templateRootPath = EXT:lost_and_found/Resources/Private/Templates/
        # cat=plugin.tx_lostandfound/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:lost_and_found/Resources/Private/Partials/
        # cat=plugin.tx_lostandfound/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:lost_and_found/Resources/Private/Layouts/
    }
    // PROTECTED REGION ID(constants.txt.own.plugin.code.eee_1045467100313_135436_1) ENABLED START
	// PROTECTED REGION END
}

// PROTECTED REGION ID(constants.txt.own.code.eee_1045467100313_135436_1) ENABLED START
// PROTECTED REGION END
