<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     collectionOperations={"get", "post"},
 *     itemOperations={"get", "put"}
 * )
 * @ApiFilter(SearchFilter::class, properties={"nom": "partial"})
 * @ORM\Entity(repositoryClass="App\Repository\ProductsRepository")
 */
class Products
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $groupe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sgroupe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ssgroupe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $energie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $eau;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $proteines;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $glucides;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lipides;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sucres;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $amidon;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fibres;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $polyols;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cendres;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $alcool;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $acidesOrganiques;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agsatures;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agmonoinsatures;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agpolyinsatures;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agbutyrique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agcaproique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agcaprylique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agcaprique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aglaurique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agmyristique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agpalmitique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agstearique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agoleique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aglinoleique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agalphalinolenique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agarachidonique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agepa;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $agdha;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cholesterol;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $calcium;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chlorure;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cuivre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $iode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $magnesium;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $manganese;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phosphore;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $potassium;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $selenium;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sodium;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zinc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $retinol;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $betacarotene;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineD;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineE;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineK1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineK2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineC;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineB1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineB2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineB3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineB5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineB6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineB9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitamineB12;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(string $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getSgroupe(): ?string
    {
        return $this->sgroupe;
    }

    public function setSgroupe(string $sgroupe): self
    {
        $this->sgroupe = $sgroupe;

        return $this;
    }

    public function getSsgroupe(): ?string
    {
        return $this->ssgroupe;
    }

    public function setSsgroupe(string $ssgroupe): self
    {
        $this->ssgroupe = $ssgroupe;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEnergie(): ?string
    {
        return $this->energie;
    }

    public function setEnergie(string $energie): self
    {
        $this->energie = $energie;

        return $this;
    }

    public function getEau(): ?string
    {
        return $this->eau;
    }

    public function setEau(string $eau): self
    {
        $this->eau = $eau;

        return $this;
    }

    public function getProteines(): ?string
    {
        return $this->proteines;
    }

    public function setProteines(string $proteines): self
    {
        $this->proteines = $proteines;

        return $this;
    }

    public function getGlucides(): ?string
    {
        return $this->glucides;
    }

    public function setGlucides(string $glucides): self
    {
        $this->glucides = $glucides;

        return $this;
    }

    public function getLipides(): ?string
    {
        return $this->lipides;
    }

    public function setLipides(string $lipides): self
    {
        $this->lipides = $lipides;

        return $this;
    }

    public function getSucres(): ?string
    {
        return $this->sucres;
    }

    public function setSucres(string $sucres): self
    {
        $this->sucres = $sucres;

        return $this;
    }

    public function getAmidon(): ?string
    {
        return $this->amidon;
    }

    public function setAmidon(string $amidon): self
    {
        $this->amidon = $amidon;

        return $this;
    }

    public function getFibres(): ?string
    {
        return $this->fibres;
    }

    public function setFibres(string $fibres): self
    {
        $this->fibres = $fibres;

        return $this;
    }

    public function getPolyols(): ?string
    {
        return $this->polyols;
    }

    public function setPolyols(string $polyols): self
    {
        $this->polyols = $polyols;

        return $this;
    }

    public function getCendres(): ?string
    {
        return $this->cendres;
    }

    public function setCendres(string $cendres): self
    {
        $this->cendres = $cendres;

        return $this;
    }

    public function getAlcool(): ?string
    {
        return $this->alcool;
    }

    public function setAlcool(string $alcool): self
    {
        $this->alcool = $alcool;

        return $this;
    }

    public function getAcidesOrganiques(): ?string
    {
        return $this->acidesOrganiques;
    }

    public function setAcidesOrganiques(string $acidesOrganiques): self
    {
        $this->acidesOrganiques = $acidesOrganiques;

        return $this;
    }

    public function getAgsatures(): ?string
    {
        return $this->agsatures;
    }

    public function setAgsatures(string $agsatures): self
    {
        $this->agsatures = $agsatures;

        return $this;
    }

    public function getAgmonoinsatures(): ?string
    {
        return $this->agmonoinsatures;
    }

    public function setAgmonoinsatures(string $agmonoinsatures): self
    {
        $this->agmonoinsatures = $agmonoinsatures;

        return $this;
    }

    public function getAgpolyinsatures(): ?string
    {
        return $this->agpolyinsatures;
    }

    public function setAgpolyinsatures(string $agpolyinsatures): self
    {
        $this->agpolyinsatures = $agpolyinsatures;

        return $this;
    }

    public function getAgbutyrique(): ?string
    {
        return $this->agbutyrique;
    }

    public function setAgbutyrique(string $agbutyrique): self
    {
        $this->agbutyrique = $agbutyrique;

        return $this;
    }

    public function getAgcaproique(): ?string
    {
        return $this->agcaproique;
    }

    public function setAgcaproique(string $agcaproique): self
    {
        $this->agcaproique = $agcaproique;

        return $this;
    }

    public function getAgcaprylique(): ?string
    {
        return $this->agcaprylique;
    }

    public function setAgcaprylique(string $agcaprylique): self
    {
        $this->agcaprylique = $agcaprylique;

        return $this;
    }

    public function getAgcaprique(): ?string
    {
        return $this->agcaprique;
    }

    public function setAgcaprique(string $agcaprique): self
    {
        $this->agcaprique = $agcaprique;

        return $this;
    }

    public function getAglaurique(): ?string
    {
        return $this->aglaurique;
    }

    public function setAglaurique(string $aglaurique): self
    {
        $this->aglaurique = $aglaurique;

        return $this;
    }

    public function getAgmyristique(): ?string
    {
        return $this->agmyristique;
    }

    public function setAgmyristique(string $agmyristique): self
    {
        $this->agmyristique = $agmyristique;

        return $this;
    }

    public function getAgpalmitique(): ?string
    {
        return $this->agpalmitique;
    }

    public function setAgpalmitique(string $agpalmitique): self
    {
        $this->agpalmitique = $agpalmitique;

        return $this;
    }

    public function getAgstearique(): ?string
    {
        return $this->agstearique;
    }

    public function setAgstearique(string $agstearique): self
    {
        $this->agstearique = $agstearique;

        return $this;
    }

    public function getAgoleique(): ?string
    {
        return $this->agoleique;
    }

    public function setAgoleique(string $agoleique): self
    {
        $this->agoleique = $agoleique;

        return $this;
    }

    public function getAglinoleique(): ?string
    {
        return $this->aglinoleique;
    }

    public function setAglinoleique(string $aglinoleique): self
    {
        $this->aglinoleique = $aglinoleique;

        return $this;
    }

    public function getAgalphalinolenique(): ?string
    {
        return $this->agalphalinolenique;
    }

    public function setAgalphalinolenique(string $agalphalinolenique): self
    {
        $this->agalphalinolenique = $agalphalinolenique;

        return $this;
    }

    public function getAgarachidonique(): ?string
    {
        return $this->agarachidonique;
    }

    public function setAgarachidonique(string $agarachidonique): self
    {
        $this->agarachidonique = $agarachidonique;

        return $this;
    }

    public function getAgepa(): ?string
    {
        return $this->agepa;
    }

    public function setAgepa(string $agepa): self
    {
        $this->agepa = $agepa;

        return $this;
    }

    public function getAgdha(): ?string
    {
        return $this->agdha;
    }

    public function setAgdha(string $agdha): self
    {
        $this->agdha = $agdha;

        return $this;
    }

    public function getCholesterol(): ?string
    {
        return $this->cholesterol;
    }

    public function setCholesterol(string $cholesterol): self
    {
        $this->cholesterol = $cholesterol;

        return $this;
    }

    public function getSel(): ?string
    {
        return $this->sel;
    }

    public function setSel(string $sel): self
    {
        $this->sel = $sel;

        return $this;
    }

    public function getCalcium(): ?string
    {
        return $this->calcium;
    }

    public function setCalcium(string $calcium): self
    {
        $this->calcium = $calcium;

        return $this;
    }

    public function getChlorure(): ?string
    {
        return $this->chlorure;
    }

    public function setChlorure(string $chlorure): self
    {
        $this->chlorure = $chlorure;

        return $this;
    }

    public function getCuivre(): ?string
    {
        return $this->cuivre;
    }

    public function setCuivre(string $cuivre): self
    {
        $this->cuivre = $cuivre;

        return $this;
    }

    public function getFer(): ?string
    {
        return $this->fer;
    }

    public function setFer(string $fer): self
    {
        $this->fer = $fer;

        return $this;
    }

    public function getIode(): ?string
    {
        return $this->iode;
    }

    public function setIode(string $iode): self
    {
        $this->iode = $iode;

        return $this;
    }

    public function getMagnesium(): ?string
    {
        return $this->magnesium;
    }

    public function setMagnesium(string $magnesium): self
    {
        $this->magnesium = $magnesium;

        return $this;
    }

    public function getManganese(): ?string
    {
        return $this->manganese;
    }

    public function setManganese(string $manganese): self
    {
        $this->manganese = $manganese;

        return $this;
    }

    public function getPhosphore(): ?string
    {
        return $this->phosphore;
    }

    public function setPhosphore(string $phosphore): self
    {
        $this->phosphore = $phosphore;

        return $this;
    }

    public function getPotassium(): ?string
    {
        return $this->potassium;
    }

    public function setPotassium(string $potassium): self
    {
        $this->potassium = $potassium;

        return $this;
    }

    public function getSelenium(): ?string
    {
        return $this->selenium;
    }

    public function setSelenium(string $selenium): self
    {
        $this->selenium = $selenium;

        return $this;
    }

    public function getSodium(): ?string
    {
        return $this->sodium;
    }

    public function setSodium(string $sodium): self
    {
        $this->sodium = $sodium;

        return $this;
    }

    public function getZinc(): ?string
    {
        return $this->zinc;
    }

    public function setZinc(string $zinc): self
    {
        $this->zinc = $zinc;

        return $this;
    }

    public function getRetinol(): ?string
    {
        return $this->retinol;
    }

    public function setRetinol(string $retinol): self
    {
        $this->retinol = $retinol;

        return $this;
    }

    public function getBetacarotene(): ?string
    {
        return $this->betacarotene;
    }

    public function setBetacarotene(string $betacarotene): self
    {
        $this->betacarotene = $betacarotene;

        return $this;
    }

    public function getVitamineD(): ?string
    {
        return $this->vitamineD;
    }

    public function setVitamineD(string $vitamineD): self
    {
        $this->vitamineD = $vitamineD;

        return $this;
    }

    public function getVitamineE(): ?string
    {
        return $this->vitamineE;
    }

    public function setVitamineE(string $vitamineE): self
    {
        $this->vitamineE = $vitamineE;

        return $this;
    }

    public function getVitamineK1(): ?string
    {
        return $this->vitamineK1;
    }

    public function setVitamineK1(string $vitamineK1): self
    {
        $this->vitamineK1 = $vitamineK1;

        return $this;
    }

    public function getVitamineK2(): ?string
    {
        return $this->vitamineK2;
    }

    public function setVitamineK2(string $vitamineK2): self
    {
        $this->vitamineK2 = $vitamineK2;

        return $this;
    }

    public function getVitamineC(): ?string
    {
        return $this->vitamineC;
    }

    public function setVitamineC(string $vitamineC): self
    {
        $this->vitamineC = $vitamineC;

        return $this;
    }

    public function getVitamineB1(): ?string
    {
        return $this->vitamineB1;
    }

    public function setVitamineB1(string $vitamineB1): self
    {
        $this->vitamineB1 = $vitamineB1;

        return $this;
    }

    public function getVitamineB2(): ?string
    {
        return $this->vitamineB2;
    }

    public function setVitamineB2(string $vitamineB2): self
    {
        $this->vitamineB2 = $vitamineB2;

        return $this;
    }

    public function getVitamineB3(): ?string
    {
        return $this->vitamineB3;
    }

    public function setVitamineB3(string $vitamineB3): self
    {
        $this->vitamineB3 = $vitamineB3;

        return $this;
    }

    public function getVitamineB5(): ?string
    {
        return $this->vitamineB5;
    }

    public function setVitamineB5(string $vitamineB5): self
    {
        $this->vitamineB5 = $vitamineB5;

        return $this;
    }

    public function getVitamineB6(): ?string
    {
        return $this->vitamineB6;
    }

    public function setVitamineB6(string $vitamineB6): self
    {
        $this->vitamineB6 = $vitamineB6;

        return $this;
    }

    public function getVitamineB9(): ?string
    {
        return $this->vitamineB9;
    }

    public function setVitamineB9(string $vitamineB9): self
    {
        $this->vitamineB9 = $vitamineB9;

        return $this;
    }

    public function getVitamineB12(): ?string
    {
        return $this->vitamineB12;
    }

    public function setVitamineB12(string $vitamineB12): self
    {
        $this->vitamineB12 = $vitamineB12;

        return $this;
    }
}
