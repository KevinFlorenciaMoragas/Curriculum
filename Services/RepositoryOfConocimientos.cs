using P1_ASP.Models;

namespace P1_ASP.Services
{
    public class RepositoryOfConocimientos
    {
        public List<ClassConocimientos> GetConocimientos()
        {
            return new List<ClassConocimientos>(){
                new ClassConocimientos()
                {
                    name = "JavaScript",
                    description = "Lenguaje para FronEnd y BackEnd",
                    imageURL = "/images/js.png"
                },
                new ClassConocimientos()
                {
                    name = "Java",
                    description = "Lenguaje de programación",
                    imageURL = "/images/java.png"
                },
                new ClassConocimientos()
                {
                    name = "C#",
                    description = "Lenguaje de programación",
                    imageURL = "/images/cshard.png"
                },
                new ClassConocimientos()
                {
                    name = "PHP",
                    description = "Lenguaje para servidores",
                    imageURL = "/images/php.png"
                }
            };
        }

    }
}
