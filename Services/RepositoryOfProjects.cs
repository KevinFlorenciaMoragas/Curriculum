using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfProjects
    {

        public List<ClassProjects> GetProjects()
        {
            return new List<ClassProjects>() {
                new ClassProjects {
                Title = "ASP.net",
                Description = "WEB realizado en ASP.NET Core",
                Link = "http://localhost:5160",
                ImageURL = "/images/asp.jpg"
                },
                new ClassProjects {
                Title = "Bootstrap",
                Description = "Porfolio hecho con Bootstrap",
                Link = "/proyectosCarpetas/PortfolofioBootstrap/index.html",
                ImageURL = "/images/porfolio.jpg"
                },
                new ClassProjects {
                Title = "Bootstrap",
                Description = "Tienda de comics hecha en Bootstrap",
                Link = "/proyectosCarpetas/comicote/index.html",
                ImageURL = "/images/comic.jpg"
                },
                new ClassProjects {
                Title = "JavaScript",
                Description = "Reloj hecho con JS",
                Link = "/proyectosCarpetas/reloj/index.html",
                ImageURL = "/images/reloj.jpg"
                },
                new ClassProjects {
                Title = "JavaScript",
                Description = "Funciones varias en JS",
                Link = "/proyectosCarpetas/funciones/index.html",
                ImageURL = "/images/funciones.jpg"
                },
                new ClassProjects {
                Title = "Concurso",
                Description = "Concurso con preguntas y respuestas aleatorias en JS",
                Link = "/proyectosCarpetas/preguntas/index.html",
                ImageURL = "/images/concurso.jpg"
                }
            };
        }
    }
}
