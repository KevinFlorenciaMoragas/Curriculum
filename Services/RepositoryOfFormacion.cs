using P1_ASP.Models;
namespace P1_ASP.Services
{
    public class RepositoryOfFormacion
    {
        public List<ClassFormacion> GetFormaciones()
        {
            return new List<ClassFormacion>()
            {
                new ClassFormacion()
                {
                    name = "Desarrollo de Aplicaciones Web",
                    center = "Centre Educatiu Monlau",
                    date= "2021-2023" ,
                    imageUrl = "/images/monlau.png"
                },
                new ClassFormacion()
                {
                    name = "Bachillerato",
                    center ="C.E. Jaume Balmes",
                    date = "2012-2015",
                    imageUrl = "/images/balmes.png"
                }, new ClassFormacion()
                {
                    name ="Certificado PL/SQL",
                    center ="ORACLE",
                    date = "2022",
                    imageUrl = "/images/formacion1.jpg"
                }, new ClassFormacion()
                {
                    name ="Certificado Java",
                    center ="ORACLE",
                    date = "2022",
                    imageUrl = "/images/formacion3.jpg"
                }, new ClassFormacion()
                {
                    name ="Certificado SQL",
                    center ="ORACLE",
                    date = "2022",
                    imageUrl = "/images/formacion2.jpg"
                }, new ClassFormacion()
                {
                    name ="Administración de Windows 10 ",
                    center ="Microsoft",
                    date = "2022",
                    imageUrl = "/images/formacion4.jpg"
                }

            };
        }
    }
}