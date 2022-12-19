using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfCurriculum
    {
        public List<ClassCurriculum> GetCurriculum()
        {
            return new List<ClassCurriculum>()
            {
                new ClassCurriculum()
                {
                    name = "Curriculum",
                    description = "Descarga de Curriculum Vitae",
                    imageURL = "/images/curriculum.png",
                    Link = "/descargas/curriculum.pdf"
                }
            };
        }
    }
}