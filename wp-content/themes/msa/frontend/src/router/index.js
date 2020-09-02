import Vue from 'vue'
import VueRouter from 'vue-router'
import store from '../store';

const AboutSystem = () => import('../pages/text/AboutSystem');
const Architecture = () => import('../pages/text/Architecture');
const BuildNewBusinessModels = () => import('../pages/text/BuildNewBusinessModels');
const Clients = () => import('../pages/text/Clients');
const CognitionLevel = () => import('../pages/text/CognitionLevel');
const ConfigurationLevel = () => import('../pages/text/ConfigurationLevel');
const ConnectionLevel = () => import('../pages/text/ConnectionLevel');
const ConversionLevel = () => import('../pages/text/ConversionLevel');
const ConvinceEmployees = () => import('../pages/text/ConvinceEmployees');
const CostsAndFinancing = () => import('../pages/text/CostsAndFinancing');
const CPS = () => import('../pages/text/CPS');
const CreateDigitalizationPlan = () => import('../pages/text/CreateDigitalizationPlan');
const CyberAndCongruenceLevel = () => import('../pages/text/CyberAndCongruenceLevel');
const DigitalToolsUseful = () => import('../pages/text/DigitalToolsUseful');
const DigitizeKnowledge = () => import('../pages/text/DigitizeKnowledge');
const Example = () => import('../pages/text/Example');
const FiveSteps = () => import('../pages/text/FiveSteps');
const HowItWorks = () => import('../pages/text/HowItWorks');
const HowSafeIsIt = () => import('../pages/text/HowSafeIsIt');
const ImplementationAndPotential = () => import('../pages/text/ImplementationAndPotential');
const ImplementationPlanning = () => import('../pages/text/ImplementationPlanning');
const Implementing = () => import('../pages/text/Implementing');
const IncreaseSales = () => import('../pages/text/IncreaseSales');
const Industry = () => import('../pages/text/Industry');
const IndustryLevel = () => import('../pages/text/IndustryLevel');
const Inventory = () => import('../pages/text/Inventory');
const LevelInIndustry = () => import('../pages/text/LevelInIndustry');
const Limitation = () => import('../pages/text/Limitation');
const MyCompany = () => import('../pages/text/MyCompany');
const MyCompanyReady = () => import('../pages/text/MyCompanyReady');
const Networked = () => import('../pages/text/Networked');
const NewIndustry = () => import('../pages/text/NewIndustry');
const Optimize = () => import('../pages/text/Optimize');
const SevenSteps = () => import('../pages/text/SevenSteps');
const SmartFactory = () => import('../pages/text/SmartFactory');
const Technical = () => import('../pages/text/Technical');
const WhyDigitize = () => import('../pages/text/WhyDigitize');

const About = () => import('../pages/image/About');
const Digitalization = () => import('../pages/image/Digitalization');
const DigitalizationBusiness = () => import('../pages/image/DigitalizationBusiness');
const DigitalizationOrIndustry = () => import('../pages/image/DigitalizationOrIndustry');
const DigitalizationReview = () => import('../pages/image/DigitalizationReview');
const Industry4 = () => import('../pages/image/Industry4');
const Industry4Business = () => import('../pages/image/Industry4Business');
const Industry4Review = () => import('../pages/image/Industry4Review');
const MSA = () => import('../pages/image/MSA');
const MSAIntegration = () => import('../pages/image/MSAIntegration');
const MSAModules = () => import('../pages/image/MSAModules');
const MSAReview = () => import('../pages/image/MSAReview');
const OurSolution = () => import('../pages/image/OurSolution');

Vue.use(VueRouter);

  const routes = [
  {
    path: '/',
    name: 'MSA',
    component: MSA,
  },
  {
    path: '/aboutSystem',
    name: 'AboutSystem',
    
    component: AboutSystem,
  },
  {
    path: '/sevenSteps',
    name: 'SevenSteps',
    
    component: SevenSteps,
  },
  {
    path: '/buildNewBusinessModels',
    name: 'BuildNewBusinessModels',
    
    component: BuildNewBusinessModels,
  },
  {
    path: '/cognitionLevel',
    name: 'CognitionLevel',
    
    component: CognitionLevel,
  },
  {
    path: '/configurationLevel',
    name: 'ConfigurationLevel',
    
    component: ConfigurationLevel,
  },
  {
    path: '/connectionLevel',
    name: 'ConnectionLevel',
    
    component: ConnectionLevel,
  },
  {
    path: '/conversionLevel',
    name: 'ConversionLevel',
    
    component: ConversionLevel,
  },
  {
    path: '/costsAndFinancing',
    name: 'CostsAndFinancing',
    
    component: CostsAndFinancing,
  },
  {
    path: '/cps',
    name: 'CPS',
    
    component: CPS,
  },
  {
    path: '/createDigitalizationPlan',
    name: 'CreateDigitalizationPlan',
    
    component: CreateDigitalizationPlan,
  },
  {
    path: '/cyberAndCongruenceLevel',
    name: 'CyberAndCongruenceLevel',
    
    component: CyberAndCongruenceLevel,
  },
  {
    path: '/digitalToolsUseful',
    name: 'DigitalToolsUseful',
    
    component: DigitalToolsUseful,
  },
  {
    path: '/digitizeKnowledge',
    name: 'DigitizeKnowledge',
    
    component: DigitizeKnowledge,
  },
  {
    path: '/example',
    name: 'Example',
    
    component: Example,

  },
  {
    path: '/fiveSteps',
    name: 'FiveSteps',
    
    component: FiveSteps,
  },
  {
    path: '/convinceEmployees',
    name: 'ConvinceEmployees',
    
    component: ConvinceEmployees,
  },
  {
    path: '/howItWorks',
    name: 'HowItWorks',
    
    component: HowItWorks,
  },
  {
    path: '/howSafeIsIt',
    name: 'HowSafeIsIt',
    
    component: HowSafeIsIt,
  },
  {
    path: '/implementationAndPotential',
    name: 'ImplementationAndPotential',
    
    component: ImplementationAndPotential,
  },
  {
    path: '/implementationPlanning',
    name: 'ImplementationPlanning',
    
    component: ImplementationPlanning,
  },
  {
    path: '/implementing',
    name: 'Implementing',
    
    component: Implementing,
  },
  {
    path: '/increaseSales',
    name: 'IncreaseSales',
    
    component: IncreaseSales,
  },
  {
    path: '/industry',
    name: 'Industry',
    
    component: Industry,
  },
  {
    path: '/networked',
    name: 'Networked',
    
    component: Networked,
  },
  {
    path: '/industryLevel',
    name: 'IndustryLevel',
    
    component: IndustryLevel,
  },
  {
    path: '/inventory',
    name: 'Inventory',
    
    component: Inventory,
  },
  {
    path: '/levelInIndustry',
    name: 'LevelInIndustry',
    
    component: LevelInIndustry,
  },
  {
    path: '/limitation',
    name: 'Limitation',
    
    component: Limitation,
  },
  {
    path: '/clients',
    name: 'Clients',
    
    component: Clients,
  },
  {
    path: '/architecture',
    name: 'Architecture',
    
    component: Architecture,
  },
  {
    path: '/myCompany',
    name: 'MyCompany',
    
    component: MyCompany,
  },
  {
    path: '/myCompanyReady',
    name: 'MyCompanyReady',
    
    component: MyCompanyReady,
  },
  {
    path: '/newIndustry',
    name: 'NewIndustry',
    
    component: NewIndustry,
  },
  {
    path: '/optimize',
    name: 'Optimize',
    
    component: Optimize,
  },
  {
    path: '/smartFactory',
    name: 'SmartFactory',
    
    component: SmartFactory,
  },
  {
    path: '/technical',
    name: 'Technical',
    
    component: Technical,
  },
  {
    path: '/whyDigitize',
    name: 'WhyDigitize',
    
    component: WhyDigitize,
  },


  {
    path: '/about',
    name: 'About',
    
    component: About,
  },
  {
    path: '/digitalization',
    name: 'Digitalization',
    
    component: Digitalization,
  },
  {
    path: '/digitalizationReview',
    name: 'DigitalizationReview',
    
    component: DigitalizationReview,
  },
  {
    path: '/digitalizationBusiness',
    name: 'DigitalizationBusiness',
    
    component: DigitalizationBusiness,
  },
  {
    path: '/digitalizationOrIndustry',
    name: 'DigitalizationOrIndustry',
    
    component: DigitalizationOrIndustry,
  },
  {
    path: '/industry4',
    name: 'Industry4',
    
    component: Industry4,
  },
  {
    path: '/industry4business',
    name: 'Industry4Business',
    
    component: Industry4Business,
  },
  {
    path: '/industry4review',
    name: 'Industry4Review',
    
    component: Industry4Review,
  },
  {
    path: '/msaReview',
    name: 'MSAReview',
    
    component: MSAReview,
  },
  {
    path: '/msaModules',
    name: 'MSAModules',
    
    component: MSAModules,
  },
  {
    path: '/msaIntegration',
    name: 'MSAIntegration',
    
    component: MSAIntegration,
  },
  {
    path: '/ourSolution',
    name: 'OurSolution',
    
    component: OurSolution,
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
