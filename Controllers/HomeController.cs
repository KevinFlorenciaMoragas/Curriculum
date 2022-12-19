using Microsoft.AspNetCore.Mvc;
using P1_ASP.Models;
using P1_ASP.Services;
using System.Diagnostics;

namespace P1_ASP.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            ViewBag.Vname = "Autor:Kevin Florencia";
            ViewBag.Vdesc = "Voy a ser un buen programador de ASP";
            return View();
        }

        public IActionResult Proyectos()
        {
            ViewBag.Vproject = new RepositoryOfProjects().GetProjects();
            return View();
        }
        public IActionResult AboutMe()
        {
            return View();
        }
        public IActionResult Conocimientos()
        {
            ViewBag.Vconocimientos = new RepositoryOfConocimientos().GetConocimientos();
            return View();
        }
        public IActionResult Contacto()
        {
            return View();
        }
        public IActionResult Curriculum()
        {
            ViewBag.Vcurriculum = new RepositoryOfCurriculum().GetCurriculum();
            return View();
        }
        public IActionResult Formacion()
        {
            ViewBag.Vformacion = new RepositoryOfFormacion().GetFormaciones();
            return View();
        }

        public IActionResult Privacy()
        {
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}